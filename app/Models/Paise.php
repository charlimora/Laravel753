<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paise extends Model
{
    use HasFactory;

    //relación uno a muchos
    public function departamentos(){
        return $this->hasMany(Departamento::class);
    }

}
