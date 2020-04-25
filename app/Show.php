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

    public function artist_type()
    {
        return $this->belongsToMany('App\ArtistType');
    }
    
    public function locations()
    {
        return $this->belongsTo('App\Locations');
    }

}
