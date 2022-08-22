<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }

    public function municipios(){
        return $this->belongsTo(Municipio::class);
    }
}
