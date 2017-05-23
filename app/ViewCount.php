<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewCount extends Model
{
    protected $fillable = ['shikime', 'ip_address'];

    public function argetims()
    {
        $this->belongsTo(Argetim::class, 'view_count_id');
    }
}
