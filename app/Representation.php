<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    protected $fillable = ['show_id', 'when', 'location_id'];

    public function shows()
    {
        return $this->belongsTo('App\Show');
    }
}
