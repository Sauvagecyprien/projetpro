<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    // on établit la relation 1 to many avec la table de produits

    public function produits() {
        return $this->hasMany('App\Product');
    }
}
