<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistType extends Model
{
     protected $fillable = ['artist_id', 'type_id'];
     
     protected $table = 'artist_type';
     
     public function shows(){
        
        return $this->belongsToMany('App\Shows');
    }
}
