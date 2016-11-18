<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    protected $table= 'todo';
    protected $fillable= ['title','description','status','rank','slug'];

    //simplest function for returning slug 
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
