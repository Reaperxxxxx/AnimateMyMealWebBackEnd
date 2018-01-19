<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    public function device() {
        return $this->belongsTo(Devices::class);
    }

    public function whosPaying()
    {
        return $this->belongsTo(User::class);
    }
}
