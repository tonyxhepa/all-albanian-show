<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class KuzhinaCat extends Model
{
    use Sluggable;
    //
    protected $fillable = [
        'name'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function kuzhinat()
    {
        return $this->hasMany(Kuzhina::class	, 'kuzhina_cats_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

}
