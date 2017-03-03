<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Listeners extends Model
{
    protected $table        = 'listener';
    protected $fillable     =   ['id','listener'];

    public function album()
    {
        return $this->belongsToMany('App\Model\Album');
    }
}
