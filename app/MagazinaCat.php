<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class MagazinaCat extends Model
{
    use Sluggable;
    //
    protected $fillable = [
        'name',

    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function magazinat()
    {
        return $this->hasMany(Magazina::class, 'magazina_cats_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
