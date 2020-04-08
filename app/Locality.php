<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $fillable = ['postal_code','locality'];

    public function locations()
    {
        return $this->hasMany('App\Location');
    }
}
