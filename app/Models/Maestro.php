<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Maestro extends Model
{
    /** @use HasFactory<\Database\Factories\MaestroFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'titulo',
        'fecha_nacimiento',
        'estado'
    ];

    public function materias(){
        return $this->hasMany(Materia::class);
    }
}
