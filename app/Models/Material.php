<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    // Definir los atributos que se pueden asignar de manera masiva
    protected $fillable = ['unidadMedida', 'descripcion', 'ubicacion', 'categoria_id'];

    // Relación con el modelo Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
