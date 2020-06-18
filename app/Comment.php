<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function shows()
    {
        return $this->belongsTo('App\Show', 'show_id');
    }
}
