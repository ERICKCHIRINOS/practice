<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maestro; 

class Materia extends Model
{
    /** @use HasFactory<\Database\Factories\MateriaFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre_clase',
        'codigo',
        'descripcion',
        'maestro_id',
        'fecha_imparticion'
    ];

    public function maestro(){
        return $this->belongsTo(Maestro::class);
    }
}
