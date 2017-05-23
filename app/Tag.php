<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Tag extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function lajme()
    {
        return $this->morphedByMany(Lajme::class, 'taggable');
    }

    public function argetim()
    {
        return $this->morphedByMany(Argetim::class, 'taggable');
    }

    public function femra()
    {
        return $this->morphedByMany(Femra::class, 'taggable');
    }

    public function kuzhina()
    {
        return $this->morphedByMany(Kuzhina::class, 'taggable');
    }

    public function magazina()
    {
        return $this->morphedByMany(Magazina::class, 'taggable');
    }

    public function sport()
    {
        return $this->morphedByMany(Sport::class, 'taggable');
    }

    public function tech()
    {
        return $this->morphedByMany(Tech::class, 'taggable');
    }


    public static function egziston($name)
    {
       $tag = static::where('name', array($name))->first();

       return $tag;
    }


}
