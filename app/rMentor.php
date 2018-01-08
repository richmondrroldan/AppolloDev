<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rMentor extends Model
{
    public $fillable = ['name','email','contact','expertise', 'project', 'mentorID', 'status', 'userID'];

    public function mentors(){

    	return $this->belongsTo(Mentor::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
