<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['show_name', 'genre', 'rating', 'lead_actor'];
}
