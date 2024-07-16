<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    public function equipos(){//esto es de uno a muchos entonces coloco el nombre copy en singular
        return $this->hasMany('App\Models\Equipo');//relacion de uno a uno  equipo prsidente con
    }
    public function gol(){//esto es de uno a muchos entonces coloco el nombre copy en singular
        return $this->hasMany('App\Models\Gol');//relacion de uno a uno  equipo prsidente con
    }
}
