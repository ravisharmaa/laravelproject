<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table    =   'artist';
    protected $fillable =   ['id','artist_name'];

    public function albums()
    {
        return $this->hasMany('App\Model\Album');
    }
}
