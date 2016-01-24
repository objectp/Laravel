<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //These fileds are allowed for mass assignmet
    protected $fillable = [

    	'user_username',
    	'user_email',
    	'country',
    	'state',
    	'city',
    	'category',
    	'type',
    	'title',
    	'price',
    	'currency_type',
    	'detail',
    	'contact_imerkato',
    	'contact_phone',
    	'image_path',
    	'thumb_path',
    ];
}
