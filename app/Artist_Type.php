<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist_Type extends Model
{
    protected $fillable = ['artist_id', 'type_id'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}