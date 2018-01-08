<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rWorkshop extends Model
{
    public $fillable = ['userID', 'name','email','contact','wType', 'status', 'why'];

    public function user(){

    	return $this->belongsTo(User::class);
    }
}
