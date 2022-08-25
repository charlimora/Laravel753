<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function paises(){
        return $this->belongsTo(Paise::class);
    }

    public function municipios(){
        return $this->hasMany(Municipio::class);
    }
}
