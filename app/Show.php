<?php

namespace App;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\ArtistType;
use App\Artist;


class Show extends Model implements Feedable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'title', 'poster_url', 'location_id', 'bookable', 'price'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shows';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    
    /*
     * Relations
     */
    public function representations()
    {
        return $this->hasMany('App\Representation');
    }

    public function artistTypes()
    {
        return $this->belongsToMany('App\ArtistType', 'artist_type_shows');
    }

    
    public function locations()
    {
        return $this->belongsTo('App\Location');
    }

    public function categories()
    {
        return $this->belongsTo('App\Show');
    }

    public function locations()
    {
        return $this->hasMany('App\Comment');
    }

    /*
     * RSS feed
     */
    
    public function toFeedItem()
    {
        /*
         * Works but attributs are wrong
         */
        return FeedItem::create()
            ->id($this->slug)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->created_at)
            ->link($this->link)
            ->author(' ');
    }
    
    public static function getFeedItems() 
    {
        return static::all();
    }
    
    public function getLinkAttribute() 
    {
        return route('show.feed', $this);
    }

}
