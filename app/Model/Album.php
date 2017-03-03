<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table        =  'album';
    protected $fillable     =   ['id','album_name','artist_id'];

    public function artist()
    {
        return $this->belongsTo('App\Model\Artist');
    }

    public function listeners()
    {
        return $this->belongsToMany('App\Model\Listeners');
    }
}
