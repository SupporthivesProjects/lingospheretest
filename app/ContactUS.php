<?php
 
	namespace App;
	 
	use Illuminate\Database\Eloquent\Model;
	 
	class ContactUS extends Model
	{
	 
    	public $table = 'contactus';
    	 
    	//public $fillable = ['fullname','email','phone','address','message','medium','from_page'];
      	public $fillable = ['fullname','email','phone','message','medium','from_page','native_lang','pairs_lang','rate_per','lang_pairs_rate','attachment'];
	 
	}
