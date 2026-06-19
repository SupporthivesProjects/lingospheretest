<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use App\Category;
use App\FlashDeal;
use App\Brand;
use App\SubCategory;
use App\SubSubCategory;
use App\Product;
use App\PickupPoint;
use App\CustomerPackage;
use App\CustomerProduct;
use App\User;
use App\Seller;
use App\Shop;
use App\Color;
use App\Order;
use App\BusinessSetting;
use App\Http\Controllers\SearchController;
use ImageOptimizer;
use Cookie;
use Carbon\Carbon;
use DB;
use File;
use GuzzleHttp\Client;
use App\Mail\ContactEmailManager;
use App\Mail\AcknowledgeEmailManager;
use App\ContactUS;
use Mail;


class TranslationController extends Controller
{
    public function certified_translation()
    {
        Session::put('Type', '1');
        return view('frontend.certifified_translation');
    }
    public function standard_translation()
    {
        Session::put('Type', '2');
        return view('frontend.standard_translation');
    }
    public function request_translation()
    {
        $services = Product::all();
        return view('frontend.request_translation', compact('services'));
    }
    
 public function addToCart(Request $request)
    {
      
        if($request->hasFile('document')){
          $image = $request->file('document');
          $name = pathinfo($request->file('document')->getClientOriginalName(),PATHINFO_FILENAME);
          $extension = $request->file('document')->getClientOriginalExtension();
          $fileName = $name.strtotime(Carbon::now()).'.'.$extension;
          $destinationPath = public_path('/uploads/documents/');
          $newpath = $image->move($destinationPath, $fileName);
          $fileName_path = "uploads/documents/$fileName";
        }else{
          $fileName_path = 'not file selected';
        }
        
        $fromLang = $request->input('from_lang_hidden');
        $toLang = $request->input('to_lang_hidden');
        $serviceId = $request->input('service_id_hidden');
        $serviceTitle = $request->input('service_title_hidden');
        $serviceDescription = $request->input('service_description_hidden');
        $servicePrice = $request->input('service_price_hidden');
        $serviceNoOfPages = $request->input('service_no_of_pages_hidden');
        $serviceNoOfWords = $request->input('service_no_of_words_hidden');
        $formattedDeliveryDate = $request->input('formattedDeliveryDate_hidden');
        $message = $request->input('message');

        // Add this data to the cart session
        $cartItem = [
            'id' =>$serviceId,
            'variant' =>0,
            'quantity' => $serviceNoOfPages,
            'price' => $servicePrice,
            'tax' => 0,
            'shipping' => 0,
            'translation_file' => "public/".$fileName_path,
            'from_lang' => $fromLang,
            'to_lang' => $toLang,
            'service_title' => $serviceTitle,
            'service_description' => $serviceDescription,
            'service_no_of_pages' => $serviceNoOfPages,
            'service_no_of_words' => $serviceNoOfWords,
            'delivery_datetime' => $formattedDeliveryDate,
            'message' => $message, 
        ];
        
        // Add this $cartItem to the session (you may have a cart helper or model to manage this)
        $request->session()->push('cart', $cartItem);

        // Return a response (this can be customized as per your requirements)
        return response()->json(['message' => 'Item added to cart successfully']);
    }
    
    public function careers()
    {
        return view('frontend.careers');
    }
    
   public function request_careers(Request $request)
    {
        $this->validate($request, [
            
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'native_lang' => 'required',
            'pairs_lang' => 'required',
            'rate_per' => 'required',
        ]);
    
        $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
        $token = $_POST['g-recaptcha-response'];
        $data = [
            'secret' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
            'response' => $token,
            'remoteip' => $_SERVER['REMOTE_ADDR'],
        ];
    
        $curlConfig = [
            CURLOPT_URL => $verifyURL,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $data,
        ];
    
        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);
    
        $responseData = json_decode($response);
        if (!$responseData->success) {
            flash('Please select captcha')->error();
            return back();
        }
    
        $array['view'] = 'emails.contactUs';
        $array['view2'] = 'emails.acknowledge';
        $array['subject'] = 'Message from the Careers page';
        $array['subject2'] = 'Message from the Careers page'; //for ackknowledge
        $array['from'] = env('MAIL_USERNAME');
        
    
        if ($request->hasFile('document')) {
            
            $image = $request->file('document');
            $name = pathinfo($request->file('document')->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $request->file('document')->getClientOriginalExtension();
            $fileName = $name . strtotime(Carbon::now()) . '.' . $extension;
            $destinationPath = public_path('/uploads/documents/');
            $newpath = $image->move($destinationPath, $fileName);
            $array['data']['fileName'] = $fileName;
            $array['data']['fileName_path'] = "uploads/documents/$fileName";
            
        } else {
             
            $array['data']['fileName_path'] = '';
        }
    
        if ($request->from_page == 'careers') {
            
            if (isset($_POST['lang_pairs_rate']) && is_array($_POST['lang_pairs_rate'])) {
                
            $lang_pairs_string = implode(',', $_POST['lang_pairs_rate']);
            $data['lang_pairs_rate'] = $lang_pairs_string;  
            
            } else {
                
            flash('What is your rate per source word for each language pair?')->error();
            return back();
            
            }
            
            if ($request->hasFile('document')) {
            $data['from_page'] = $request->from_page;
            $data['fullname'] = $request->fullname;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;
            $data['native_lang'] = $request->native_lang;
            $data['pairs_lang'] = $request->pairs_lang;
            $data['rate_per'] = currency_symbol().$request->rate_per;
            $data['attachment'] = $array['data']['fileName_path'];
            $array['data'] = $data;
            
            }else{
                
            $data['from_page'] = $request->from_page;
            $data['fullname'] = $request->fullname;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;
            $data['native_lang'] = $request->native_lang;
            $data['pairs_lang'] = $request->pairs_lang;
            $data['rate_per'] = currency_symbol().$request->rate_per;
            $array['data'] = $data;
            }
            
            
              
    
            ContactUS::create([
                'from_page' => $request->from_page,
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'native_lang' => $request->native_lang,
                'pairs_lang' => $request->pairs_lang,
                'rate_per' => currency_symbol().$request->rate_per,
                'lang_pairs_rate' => $data['lang_pairs_rate'],
                'attachment' => $array['data']['attachment'],
            ]);
        } else {
            ContactUS::create($request->all());
            $array['data'] = $request->all();
        }
    
        if (env('MAIL_USERNAME') != null) {
            try {
                Mail::to('support@lingosphere.co')->queue(new ContactEmailManager($array));
                //Mail::to('narayan.z@supporthives.com')->queue(new ContactEmailManager($array));
                Mail::to($request->email)->queue(new AcknowledgeEmailManager($array));
            } catch (\Exception $e) {
                dd($e);
            }
        }
    
         if( $request->from_page == 'contactus' )
        {
         session()->flash('careerscontactsuccess');
        }else{
          session()->flash('packagesuccess');  
        }
   
        return back();
                if (isset($yourArray['attachment'])) {
            // Access the 'attachment' index here
        } else {
            // Handle the case where 'attachment' index does not exist
        }
    }

   
}
