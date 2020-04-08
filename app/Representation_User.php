<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation_User extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function representations()
    {
        return $this->belongsTo('App\Representation');
    }
}
