<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['firstname', 'lastname'];

      public function types()
    {
        return $this->belongsToMany('App\Type');
    }


}
