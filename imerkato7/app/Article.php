<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [

    	'title',
    	'body'
    ];

    //protected $dates = ['created_at'];//this changes created_at filed to Carbon instance

    //query scope is a way in which you can shorten your queries so the word scope used in the method
    public function scopePublished($query){
    	$query->where('published_at', '<=', Carbon::now());
    }

    //Mutators are methods that alter data before it store in db or after it retraived from database
    public function setPublishedAtAttribute($data){
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $data);
    }
}
