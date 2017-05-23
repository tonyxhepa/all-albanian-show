<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ElektronikCat extends Model
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


    public function elektroniks()
    {
        return $this->hasMany(Elektronik::class, 'elektronik_cats_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
