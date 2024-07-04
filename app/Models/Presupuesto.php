<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    use HasFactory;

    protected $fillable = ['codigoPresupuesto', 'nombrePresupuesto'];


 // Relación uno a muchos con MaterialUnidad
 public function materialUnidades()
 {
     return $this->hasMany(MaterialUnidad::class);
 }

 // Relación uno a muchos con Unidad
 public function unidades()
 {
     return $this->hasMany(Unidad::class);
 }



}

