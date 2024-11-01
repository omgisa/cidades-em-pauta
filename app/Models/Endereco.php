<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['rua'];

    public function alertas(){
        return $this->hasMany(Alerta::class);
    }

    public function avaliacaos(){
        return $this->hasMany(Avaliacao::class);
    }
}
