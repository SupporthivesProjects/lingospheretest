<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    public $table = 'user_logins';

    public $fillable = [
        'user_id',
        'user_name',
        'user_ip',
        'city',
        'country',
        'country_code',
        'longitude',
        'latitude',
        'browser',
        'os'
    ];
}