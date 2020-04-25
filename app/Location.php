<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable =
        ['slug','designation','address','locality_id','website','phone'];
    /**
     * Get the locality that owns the location.
     */
    public function localities()
    {
        return $this->belongsTo('App\Locality', 'locality_id');
    }
}
