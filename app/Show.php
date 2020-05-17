<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'title', 'poster_url', 'location_id', 'bookable', 'price'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shows';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function representations()
    {
        return $this->hasMany('App\Representation');
    }

    public function artistTypes()
    {
        return $this->belongsTo('App\ArtistType');
    }

    
    public function locations()
    {
        return $this->belongsTo('App\Location');
    }

}
