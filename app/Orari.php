<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orari extends Model
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
