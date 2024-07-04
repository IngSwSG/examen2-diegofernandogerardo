<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['idUsuario', 'identificacion', 'nombre', 'apellidos', 'telefono'];


    // Relación uno a muchos con Requisiciones
    public function requisiciones()
    {
        return $this->hasMany(Requisicion::class);
    }

}
