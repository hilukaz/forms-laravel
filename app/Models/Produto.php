<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [//valores do campo que quer colocar
        'id',
        'nome',
        'descricao',
        'peso',
        'preco',
        'estoque_minimo',
        'estoque_maximo',
    ];
}
