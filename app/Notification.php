<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $timestamps = false;
    
    protected $guarded = [];

    public function scopeGetNotif($query)
    {
        return $query->take(3)->latest('date')->get();
    }

    public function scopeGetTotal($query)
    {
        return $query->where('status', 0)->count();
    }

    public function scopeGetNotifNew($query)
    {
        return $query->where('status', 0);
    }

    public function scopeGetNotifOld($query)
    {
        return $query->where('status', 1);
    }
}
