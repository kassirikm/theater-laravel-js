<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = ['name'];
    // One to Many relationship 
    public function artists()
    {
        return $this->hasMany('App\Artist');
    }
}
