<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $hidden = [ 'password', 'remember_token'];


    /**
     * A user can have many articles 
     * to assocate a user and articles
     * 
     */
    public function articles(){

        return $this->hasMany('App\article');
    }
}
