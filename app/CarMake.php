<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    protected $fillable = ['name'];

    public function car_model()
    {
        return $this->hasMany('App\CarModel');
    }

    public function makina()
    {
        return $this->hasMany(Makina::class, 'car_make_id');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
