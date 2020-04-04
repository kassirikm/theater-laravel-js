<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['first_name', 'last_name'];

    public function artist_types()
    {
        return $this->hasMany('App\Artist_type');
    }

}
