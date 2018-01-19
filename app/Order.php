<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function device()
    {
        return $this->hasOne(Devices::class);
    }

}
