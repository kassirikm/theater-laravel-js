<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist_Type_Show extends Model
{
    public function artist_type()
    {
        return $this->belongsTo('App\ArtistType');
    }

    public function show()
    {
        return $this->belongsTo('App\Show');
    }
}
