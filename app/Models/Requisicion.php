<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    use HasFactory;

    protected $fillable = ['idRequisicion', 'fecha', 'estado'];

// Relación uno a muchos con Items
public function items()
{
    return $this->hasMany(itemRequisicion::class);
}

// Relación muchos a uno con User
public function user()
{
    return $this->belongsTo(Usuario::class);
}



}




