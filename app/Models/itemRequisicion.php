<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemRequisicion extends Model
{
    use HasFactory;

    protected $fillable = ['idItemRequisicion', 'cantidad', 'cantidadAprobada'];

    // Relación muchos a uno con Requisicion
    public function requisicion()
    {
        return $this->belongsTo(Requisicion::class);
    }




}
