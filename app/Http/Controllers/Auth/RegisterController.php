<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\BusinessSetting;
use App\OtpConfiguration;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OTPVerificationController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Cookie;
use Nexmo;
use Session;
//use Twilio\Rest\Client;
use GuzzleHttp\Client;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                session()->flash('registrationsuccess');
            }
            else {
                $user->sendEmailVerificationNotification();
                
                 session()->flash('registrationsuccess');
               
            }
        }
        else {
            if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated){
                $user = User::create([
                    'name' => $data['name'],
                    'phone' => '+'.$data['country_code'].$data['phone'],
                    'password' => Hash::make($data['password']),
                    'verification_code' => rand(100000, 999999)
                ]);
                if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated){
                    $otpController = new OTPVerificationController;
                    $otpController->send_code($user);
                }
            }
        }
        $customer = new Customer;
        $customer->user_id = $user->id;
        $customer->save();

        if(Cookie::has('referral_code')){
            $referral_code = Cookie::get('referral_code');
            $referred_by_user = User::where('referral_code', $referral_code)->first();
            if($referred_by_user != null){
                $user->referred_by = $referred_by_user->id;
                $user->save();
            }
        }

        return $user;
    }

    public function register(Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            if(User::where('email', $request->email)->first() != null){
                flash('EmailPhone already exists.');
                return back();
            }
        }
        elseif (User::where('phone', '+'.$request->country_code.$request->phone)->first() != null) {
            flash('Phone already exists.');
            return back();
        }
        if ( $request->password != $request->password_confirmation) {
            flash('Password does not match.');
            return back();
        }

        //$this->validator($request->all())->validate();
      
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
		'password'=>'required',
        'password_confirmation' => 'required'
        ]);
        
         $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';

                $token = $_POST['g-recaptcha-response'];

                $data = array(
                'secret' =>  '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
                'response' => $token, 
                'remoteip' => $_SERVER['REMOTE_ADDR'] 
                ); 
                
                $curlConfig = array( 
                CURLOPT_URL => $verifyURL, 
                CURLOPT_POST => true, 
                CURLOPT_RETURNTRANSFER => true, 
                CURLOPT_POSTFIELDS => $data 
                ); 
                $ch = curl_init(); 
                curl_setopt_array($ch, $curlConfig); 
                $response = curl_exec($ch); 
                curl_close($ch); 
                
                $responseData = json_decode($response); 
                if(!$responseData->success){ 
                flash('Please select captcha')->error();
                return back();
                }

                event(new Registered($user = $this->create($request->all())));
        
                $this->guard()->login($user);
                
               
                
                return $this->registered($request, $user)
                    ?: redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        if ($user->email == null) {
            return redirect()->route('verification');
        }
        else {
            return redirect()->route('home');
        }
    }
}
