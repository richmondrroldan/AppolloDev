<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rMentor extends Model
{
    public $fillable = ['name','email','contact','expertise', 'project'];
}
