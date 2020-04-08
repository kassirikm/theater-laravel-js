<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['slug', 'title', 'poster_url', 'location_id', 'bookable', 'price'];

    public function representation()
    {
        return $this->hasMany('App\Representation');
    }

    public function artiste_type_show()
    {
        return $this->hasMany('App\Artiste_Type_Shows');
    }
}
