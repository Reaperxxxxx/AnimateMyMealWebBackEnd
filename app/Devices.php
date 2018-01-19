<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function Contains() {
        return $this->hasMany(Instance::class);
    }
}
