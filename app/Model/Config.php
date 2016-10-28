<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table= 'config';
    protected $fillable= ['address','phone','about_desc','facebook','twitter','gplus','mail'];
}
