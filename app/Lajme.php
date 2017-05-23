<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Lajme extends Model
{
    use Sluggable;
    //
    protected $fillable = [
        'lajme_cats_id',
        'country_id',
        'city_id',
        'title',
        'pershkrimi',
        'slug',
        'publikuesi',

    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function photos()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
    public function delete()
    {
        // delete all related photos
        $this->photos()->delete();
        // as suggested by Dirk in comment,
        // it's an uglier alternative, but faster
        // Photo::where("user_id", $this->id)->delete()
        // delete the user
        return parent::delete();
    }
    public function lajme_cats() {
        return $this->belongsTo('App\LajmeCat');
    }


    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function tre_lajme()
    {
        return $this->orderBy('updated_at', 'desc')->take(3)->get();


    }

    public function scopeLatest($query)
    {
        return $query->orderBy('updated_at', 'desc')->get();
    }

    public function scopeSkipTake($query, $skip_num, $take_num)
    {
        return $query->orderBy('updated_at', 'desc')->skip($skip_num)->take($take_num)->get();

    }
}
