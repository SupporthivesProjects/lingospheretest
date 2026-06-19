<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;
use App\Mail\ContactEmailManager;
use App\Mail\AcknowledgeEmailManager;
use Carbon\Carbon;
use File;
use GuzzleHttp\Client;
use Session;
 
class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contactus');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {
       if($request->from_page == 'contactus'){
           $this->validate($request, [
           		'fullname' => 'required',
            	'email' => 'required|email',
    			'phone'=>'required',
           		'message' => 'required',
            ]);
       }
       else if($request->from_page == 'languages'){
            $this->validate($request, [
       		    'fullname' => 'required',
         	    'email'=>'required|email',
        	    'message' => 'required',
            ]);
        } 
        else if($request->from_page == 'documents'){
            $this->validate($request, [
       		    'fullname' => 'required',
         	    'email'=>'required|email',
        	    'message' => 'required',
            ]);
        } 
        
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
 
       
       
        $array['view'] = 'emails.contactUs';
     	$array['view2'] = 'emails.acknowledge'; // for ackknowledge
     
     	if( $request->from_page == 'contactus' )
        {
     		$array['subject'] = 'Message from the Contact Us page';
        }
     	else if( $request->from_page == 'aboutus' )
        {
     		$array['subject'] = 'Message from the About Us page';
        }
        else if( $request->from_page == 'languages' )
        {
     		$array['subject'] = 'Message from the Languages page';
        }
        else if( $request->from_page == 'documents' )
        {
     		$array['subject'] = 'Message from the Documents page';
        }
     	else if( $request->from_page == 'service' )
        {
     		$array['subject'] = 'Message from Service Page';
        }  
      else if ($request->from_page == 'bespoke_service')
      {
         $array['subject'] = 'Message from Bespoke Service Page';
      }
     	
     	$service = $request->service;
   		$attachment = $request->attachment;
     //dd($service);
     //dd($attachment);
     	
        $array['subject2'] = 'Thank you for getting in touch'; //for ackknowledge
     
     	$array['from'] = env('MAIL_USERNAME');
     
     
     	
     
     if($request->hasFile('document')){
          $image = $request->file('document');
          $name = pathinfo($request->file('document')->getClientOriginalName(),PATHINFO_FILENAME);
          //dd($name);
          $extension = $request->file('document')->getClientOriginalExtension();
          $fileName = $name.strtotime(Carbon::now()).'.'.$extension;
          $destinationPath = public_path('/uploads/documents/');
          $newpath = $image->move($destinationPath, $fileName);
          //dd($fileName);
          $array['data']['fileName'] = $fileName;
          $array['data']['fileName_path'] = "uploads/documents/$fileName";
          
          //dd($destinationPath);
          //dd($array['data']['fileName_path']);
        }else{
          $array['data']['fileName_path'] = '';
        }
     
     //dd($array);
     if($request->from_page == 'service'){
       //dd($request->all());
         if($request->hasFile('document')){
         $data['from_page'] = $request->from_page;
         $data['fullname'] = $request->fullname;
         $data['email'] = $request->email;
         $data['phone'] = $request->phone;
         $data['message'] = $request->message;
         $data['service'] = $request->service;
         $data['attachment'] = $array['data']['fileName_path'];
         $array['data'] = $data;
       }else{
         $data['from_page'] = $request->from_page;
         $data['fullname'] = $request->fullname;
         $data['email'] = $request->email;
         $data['phone'] = $request->phone;
         $data['message'] = $request->message;
         $data['service'] = $request->service;
         $array['data'] = $data;
       }
       //dd($array);
       ContactUS::create([
       	 'from_page' => $request->from_page,
         'fullname' => $request->fullname,
         'email' => $request->email,
         'phone' => $request->phone,
         'message' => $request->message,
         'service' => $request->service,
         'attachment' => $array['data']['attachment'],
       ]);
     }else{
       ContactUS::create($request->all());
       $array['data'] = $request->all();
     }
     	
     	//sends email to site admin with
         if(env('MAIL_USERNAME') != null){
           try {
             		//dd($array);
             		Mail::to('support@lingosphere.co')->queue(new ContactEmailManager($array));
             		//Mail::to('rishav@supporthives.com')->queue(new ContactEmailManager($array));
             		
             		//customer acknowledgement mail
             		Mail::to($request->email)->queue(new AcknowledgeEmailManager($array));
             		/*Mail::to($request->user())
                            ->cc($moreUsers)
                            ->bcc($evenMoreUsers)
                            ->queue(new OrderShipped($order));*/
             
               } catch (\Exception $e) {
                    dd($e);
               }
         }
       //return back()->with('success', 'Thanks for contacting us!');
       	if( $request->from_page == 'contactus' )
        {
     	 session()->flash('contactsuccess');
        }else{
          session()->flash('packagesuccess');  
        }
        
      
     	return back();
   }
}