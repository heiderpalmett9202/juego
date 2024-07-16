<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function presidente(){//esto es de uno a muchos entonces coloco el nombre copy en singular
        return $this->belongsTo('App\Models\Presidente');//relacion de uno a uno  equipo prsidente con
    }
    public function jugador(){//esto es de uno a muchos entonces coloco el nombre copy en singular
        return $this->belongsTo('App\Models\Jugador');//relacion de uno a uno  equipo prsidente con
    }
    public function partidos(){//esto es de uno a muchos entonces coloco el nombre copy en singular
        return $this->belongsToMany('App\Models\Partido');//relacion de uno a uno  equipo prsidente con
    }
    


    
}
