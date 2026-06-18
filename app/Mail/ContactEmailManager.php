<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmailManager extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $array;

    public function __construct($array)
    {
        $this->array = $array;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
     	//dd($this->array['data']);
       if($this->array['data']['from_page'] == 'service')
       {
         //dd($this->array['data']);
         if($this->array['data']['attachment'])
         {
           
           $message = $this->view($this->array['view']);
           //dd($array['data']['attachment']);
       	   $message->subject($this->array['subject']);
            $message->from($this->array['from']);
           	//$message->cc('support@oceanbluemarketing.com');
           
             $filePath = $this->array['data']['attachment'];
           
           	if($filePath != null){
              $message->attach(public_path($filePath)); // attach each file
            }
         	return $message;
           
       }
       else
       {
         	return $this->view($this->array['view'])
         	         ->cc('support@lingosphere.co')
                     ->from($this->array['from'])
                     ->subject($this->array['subject']);
       }
     	
     }elseif($this->array['data']['from_page'] == 'careers')
       {
         //dd($this->array['data']);
         if($this->array['data']['attachment'])
         {
           
           $message = $this->view($this->array['view']);
           //dd($array['data']['attachment']);
       	   $message->subject($this->array['subject']);
            $message->from($this->array['from']);
           	//$message->cc('support@oceanbluemarketing.com');
           
             $filePath = $this->array['data']['attachment'];
           
           	if($filePath != null){
              $message->attach(public_path($filePath)); // attach each file
            }
         	return $message;
           
       }
       else
       {
         	return $this->view($this->array['view'])
         	         ->cc('support@lingosphere.co')
                     ->from($this->array['from'])
                     ->subject($this->array['subject']);
       }
     	
     }else{
         return $this->view($this->array['view'])
                     ->cc('support@lingosphere.co')
                     ->from($this->array['from'])
                     ->subject($this->array['subject']);
       }
 }
}
