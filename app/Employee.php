<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{


    public function working_place() {
        return $this->belongsTo(Restaurant::class);
    }

    public function isServing() {
        return $this->hasMany(Devices::class);
    }
}
