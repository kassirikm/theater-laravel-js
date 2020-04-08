<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['slug', 'title', 'poster_url', 'location_id', 'bookable', 'price'];

    public function representations()
    {
        return $this->hasMany('App\Representation');
    }
}
