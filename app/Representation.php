<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    protected $fillable = ['show_id', 'when', 'location_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'representations';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function show()
    {
        return $this->belongsTo('App\Show', );
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
