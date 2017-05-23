<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Argetim extends Model
{
    use Sluggable;

    protected $fillable = [
        'argetim_cats_id',
        'title',
        'shikime',
        'pershkrimi',
        'slug',
        'publikuesi'
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

    public function embeds()
    {
        return $this->morphMany('App\Embed', 'embedable');
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
    public function argetim_cats() {
        return $this->belongsTo('App\ArgetimCat', 'argetim_cats_id');
    }

    public function view_counts() {
        return $this->belongsTo(ViewCount::class, 'view_count_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
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
