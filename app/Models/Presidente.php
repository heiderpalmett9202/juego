<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;
    public function equipo(){//esto es de uno a muchos entonces coloco el nombre copy en singular
        return $this->hasOne('App\Models\Equipo');//relacion de uno a uno prsidente con equipo
    }
}
