<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table= 'gallery';
    protected $fillable= ['title','rank','status','image'];
    protected $casts = ['status'=>'boolean'];

    public function getRouteKeyName()
    {
    	return 'title';
    }
}
