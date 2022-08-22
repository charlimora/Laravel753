<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nombre', 'descripcion','imagen'];
    use HasFactory;

    public function materias(){
        return $this->belongsToMany(Materia::class);
    }

    public function estudiantes(){
        return $this->hasMany('estudiantes');
    }
}
