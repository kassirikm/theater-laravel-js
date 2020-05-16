<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =
        ['slug','designation','address','locality_id','website','phone'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the locality that owns the location.
     */
    public function localities()
    {
        return $this->belongsTo('App\Locality', 'locality_id');
    }

    /**
     * Get the shows in this locations
     */
    public function shows()
    {
        return $this->hasMany('App\Show');
    }

    /**
     * Get the representations in this location.
     */
    public function representations()
    {
        return $this->hasMany('App\Representation');
    }

}

