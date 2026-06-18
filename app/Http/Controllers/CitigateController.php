<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Routing\UrlGenerator;
use App\Http\Controllers;
use App\Order;
use App\BusinessSetting;
use App\Seller;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\WalletController;
use App\CustomerPackage;
use App\Http\Controllers\CustomerPackageController;
use Log;
//use DB;
session_start(); 

class CitigateController extends Controller
{

    public function index(Request $request)
    {
            //dump($request);
            # Here you have to receive all the order data to initate the payment.
            # Lets your oder trnsaction informations are saving in a table called "orders"
            # In orders table order uniq identity is "order_id","order_status" field contain status of the transaction, "grand_total" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
            if(Session::has('payment_type')){
                if(Session::get('payment_type') == 'cart_payment'){
                    
                    $order = Order::findOrFail($request->session()->get('order_id'));
                    
                    //dump($order);
                    //dump($request->session());
                    
                    $post_data = array(); 
                    $totalll=0;
                  	foreach ($order->orderDetails as $key => $orderDetail){
                     $totalll = $totalll + round(convert_price($orderDetail->price),2);
                      
                    }
                  	//dd($total_value_amount);
                  	
                    $post_data['total_amount'] = $totalll;
                    
                    $post_data['tran_id'] = substr(md5($request->session()->get('order_id')), 0, 10); // tran_id must be unique
                    
                    # generating signature 
                    
                    $MerchantPassword = env('CITIGATE_MerchantPassword'); //should be get from env file
                    $MerchantRef = $post_data['tran_id']; //should be same as transactio id
                    
                    if(Session::has('currency_code')){
                        $currency_code = Session::get('currency_code');
                    }
                    else{
                        $currency_code = \App\Currency::findOrFail(\App\BusinessSetting::where('type', 'system_default_currency')->first()->value)->code;
                    }
                    
                    
                  	$Amount = $totalll *100;
                    
                    $concat = $MerchantPassword.$MerchantRef.$currency_code.$Amount;
                    $signature = sha1($concat);
                    # generating signature code
                    
                    $server_name=$request->root()."/";
                    
                    #Begin Citigate Payment Gateway data All below fields are compulsory 
                    
                    $post_data['MerchantName'] = env('CITIGATE_MerchantName');
                    $post_data['MerchantPassword'] = env('CITIGATE_MerchantPassword');
                    $post_data['MerchantRef'] = $MerchantRef;
                    
                    $post_data['Firstname'] = $request->session()->get('shipping_info')['name'];
                    $post_data['Surname'] = $request->session()->get('shipping_info')['lname'];
                    $post_data['StreetLine1'] = $request->session()->get('shipping_info')['address'];
                    
                    if(isset($request->session()->get('shipping_info')['addressL2'])){
                      $post_data['StreetLine2'] = $request->session()->get('shipping_info')['addressL2'];  
                    }
                    
                    $post_data['Currency'] = $currency_code;
                    $post_data['Amount'] = $Amount;
                    $post_data['City'] = $request->session()->get('shipping_info')['city'];
                    $post_data['Email'] = $request->session()->get('shipping_info')['email'];
                    $post_data['PostalCode'] = $request->session()->get('shipping_info')['postal_code'];
                    $post_data['Telephone'] = $request->session()->get('shipping_info')['phone'];
                    $post_data['Country'] = $request->session()->get('shipping_info')['country'];
                    // Add session token to access record in citigate success
                    $post_data['session_token'] = $request->session_token;
                    
                     // Add merchant_ref for unique key to access record in citigate success
                    DB::table('session_tokens')
                        ->where('token', $request->session_token) // Match the session token
                        ->update(['merchant_ref' => $MerchantRef]); // Update the merchant_ref field
                    
                    if( $post_data['Country'] == 'US'){
                        
                        $post_data['StateProvince'] = $request->session()->get('shipping_info')['stateProvince'];
                        $post_data['DateOfBirth'] = $request->session()->get('shipping_info')['dob'];
                        
                    }
                    
                    //$post_data['SuccessURL']= 'http://supporthives.com/gopalleo.php?result=pass';
                    //$post_data['FailURL'] = 'http://supporthives.com/gopalleo.php?result=fail';
                    
                    $post_data['SuccessURL']= $server_name . "citigate/success"; //route defined in web.php 
                    $post_data['FailURL'] = $server_name . "citigate/fail"; //route defined in web.php
                    
                    $post_data['CallbackURL'] = env('CITIGATE_URL'); //should be get from env
                    
                    $post_data['Signature'] = $signature; 
                    #End Citigate Payment Gateway data 
                    
                    #Start to save these value  in session to pick in success page.
                    $_SESSION['payment_values']['tran_id']=$post_data['tran_id'];
                    $_SESSION['payment_values']['order_id']=$request->session()->get('order_id');
                    $_SESSION['payment_values']['payment_type']=$request->session()->get('payment_type');
                    #End to save these value  in session to pick in success page.
                    
                    #storing billing address 
                    $user_id = $request->session()->get('shipping_info')['user_id'];
                    $email = $request->session()->get('shipping_info')['email'];
                    //$result = $initial ?: 'default';
                    $name = $request->session()->get('shipping_info')['name'];
                    $lname = $request->session()->get('shipping_info')['lname'];
                    
                    $address = $request->session()->get('shipping_info')['address'];
                    
                    $addressL2 = isset($request->session()->get('shipping_info')['addressL2']) ? $request->session()->get('shipping_info')['addressL2'] : '';
                    
                    $city = $request->session()->get('shipping_info')['city'];
                    $country = $request->session()->get('shipping_info')['country'];
                    $postal_code = $request->session()->get('shipping_info')['postal_code'];
                    
                    $stateProvince = isset($request->session()->get('shipping_info')['stateProvince']) ? $request->session()->get('shipping_info')['stateProvince'] : '';
                    
                    $dob = $request->session()->get('shipping_info')['dob'];
                    $phone = $request->session()->get('shipping_info')['phone'];
                    
                    DB::insert("INSERT INTO `last_billing_address`
                    (`user_id`, `email`, `name`, `lname`, `address`, `addressL2`, `city`, `postal_code`, `country`, `stateProvince`, `dob`, `phone`) 
                    VALUES 
                    ($user_id,'$email','$name','$lname','$address','$addressL2','$city','$postal_code','$country','$stateProvince',CAST('". $dob ."' AS DATE),'$phone')");  
            
                    }
                }

            $citigate = new Citigate();
            # initiate(Transaction Data , false: Redirect to Citigate gateway/ true: Show all the Payement gateway here )
            $payment_options = $citigate->initiate($post_data, false);


    }

    public function success(Request $request)
    {
        // Code to restore the session
        $merchantRef = $request->input('MerchantRef');
        $sessionData = DB::table('session_tokens')->where('merchant_ref', $merchantRef)->first();
        
        if ($sessionData) {
            
            // Restore the session data
            $restoredSession = json_decode($sessionData->session_data, true);
            session()->replace($restoredSession);
            
            // Re-authenticate the user if needed
            if (isset($sessionData->user_id)) {
                Auth::loginUsingId($sessionData->user_id);
            }
            // Delete the used record
            DB::table('session_tokens')->where('merchant_ref', $merchantRef)->delete();
            
            
            // Log the successful transaction
            DB::insert("INSERT INTO `gateway_history`
                (`TransactionID`, `MerchantRef`, `TransTypeID`, `Currency`, `Amount`, `BusinessCase`, `Descriptor`, `Bank`, 
                `ResponseCode`, `ResponseDescription`, `BankCode`, `BankDescription`, `Signature`) 
                VALUES (
                    :TransactionID,
                    :MerchantRef,
                    :TransTypeID,
                    :Currency,
                    :Amount,
                    :BusinessCase,
                    :Descriptor,
                    :Bank,
                    :ResponseCode,
                    :ResponseDescription,
                    :BankCode,
                    :BankDescription,
                    :Signature
                )", [
                    'TransactionID' => $request->TransactionID,
                    'MerchantRef' => $request->MerchantRef,
                    'TransTypeID' => $request->TransTypeID,
                    'Currency' => $request->Currency,
                    'Amount' => $request->Amount / 100,
                    'BusinessCase' => $request->BusinessCase,
                    'Descriptor' => $request->Descriptor,
                    'Bank' => $request->Bank,
                    'ResponseCode' => $request->ResponseCode,
                    'ResponseDescription' => $request->ResponseDescription,
                    'BankCode' => $request->BankCode,
                    'BankDescription' => $request->BankDescription,
                    'Signature' => $request->Signature
                ]
            );
            
            
                
            // Handle post-payment actions
            if (session()->has('payment_type') && session('payment_type') == 'cart_payment') {
                $checkoutController = new CheckoutController;
                session()->put('order_id', session('order_id')); // Ensure 'order_id' exists in the session
                return $checkoutController->checkout_done(session('order_id'), json_encode($request->all()));
            }
            return response()->json(['message' => 'Payment processed successfully']);
        } else {
            abort(403, 'Invalid or expired session token.');
        }
    }

    public function fail(Request $request)
    {   
        Log::info($request);
        DB::insert("INSERT INTO `gateway_history`
            (`TransactionID`, `MerchantRef`, `TransTypeID`, `Currency`, `Amount`, `BusinessCase`, `Descriptor`, `Bank`,
                `ResponseCode`, `ResponseDescription`,`BankCode`, `BankDescription`, `Signature`) 
            VALUES (
                    '$request->TransactionID',
                    '$request->MerchantRef',
                    '$request->TransTypeID',
                    '$request->Currency',
                    '$request->Amount',
                    '$request->BusinessCase',
                    '$request->Descriptor',
                    '$request->Bank',
                    '$request->ResponseCode',
                    '$request->ResponseDescription',
                    '$request->BankCode',
                    '$request->BankDescription',
                    '$request->Signature'
                    )
                ");

        
        $request->session()->forget('order_id');
        $request->session()->forget('payment_data');
        //flash(__('Payment Failed'))->payfail();
        session()->flash('paymentfailed');
        return redirect()->route('checkout.shipping_info');
    }

     public function cancel(Request $request)
    {
        $request->session()->forget('order_id');
        $request->session()->forget('payment_data');
        //flash(__('Payment cancelled'))->success();
    	session()->flash('paymentcancelled');
    	return redirect()->route('checkout.shipping_info');
    }

}
