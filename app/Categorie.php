<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    public function resturant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function menuItems() {
        return $this->hasMany(MenuItem::class);
    }
}
