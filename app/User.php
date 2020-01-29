<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function roles() {

        return $this->belongsToMany('App\Role');
    }

    public function commentaire() {

        return $this->hasMany('App\Commentaire');
    }

    public function house() {

        return $this->hasMany('App\House');
    }

    public function hasAnyRole($roles) {

        if (is_array($roles)) {

            foreach ($roles as $role) {

                if ($this->hasRole($roles)) {

                    return true;
                }
            }
        }

        else {

            if ($this->hasRole($roles)) {

                return true;
            }
        }

        return false;
    }

    public function hasRole($role) {

        if ($this->roles()->where('nom', $role)->first()) {

            return true;
        }

        return false;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
