<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = ['name'];

    public function car_make()
    {
        return $this->belongsTo('App\CarMake');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
