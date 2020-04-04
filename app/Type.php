<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['type'];

    public function artist_types()
    {
        return $this->hasMany('App\Artist_type');
    }
}
