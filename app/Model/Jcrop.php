<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jcrop extends Model
{
    protected $table	= 'jcrop';
    protected $fillable	= ['title','status','rank','image'];
     
}
