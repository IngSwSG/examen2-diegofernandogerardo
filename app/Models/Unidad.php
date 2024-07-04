<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $primaryKey = 'idUnidad'; // Especificar la llave primaria
    protected $fillable = ['nombre'];

    public function materialUnidads()
    {
        return $this->hasMany(MaterialUnidad::class, 'idUnidad');
    }
}
