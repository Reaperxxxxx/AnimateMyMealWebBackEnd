<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

}
