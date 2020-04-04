<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the user that owns the role.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
