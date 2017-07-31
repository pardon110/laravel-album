<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['album_id','name','intro','src'];

    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }
}
