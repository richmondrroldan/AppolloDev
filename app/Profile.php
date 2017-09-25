<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = ['interests','bio'];

    public function user(){
    	$this->belongsTo(User::class);
    }
}
