<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }
    public function devices() {
        return $this->hasMany(Devices::class);
    }
    public function categories() {
        return $this->hasMany(Categorie::class);
    }



    /*
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function devices()
    {
        return $this->belongsToMany(devices::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    */
}


