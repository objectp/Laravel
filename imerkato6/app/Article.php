<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //define mass assign attributs
    //it is ok to mass asign this atributes
    protected $fillable = [
     'title',
     'body',
     'user_id' // temporary
    ];


    public function scopePublished($query){
    	$query->where('published_at', '<=', Carbon::now());
    }


    public function scopeUnpublished($query){
    	$query->where('published_at', '>', Carbon::now());
    }


    public function setPublishedAtAtribute(){
    	$this->attributs['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /* An article is owned by the user*/
    public function user(){

        return $this->belongsTo('App\User');
    }
   
}
