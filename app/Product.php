<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // on établit la relation inverse avec la table famille

    public function famille(){
        return $this->belongsTo('App\Famille');
    }

}
