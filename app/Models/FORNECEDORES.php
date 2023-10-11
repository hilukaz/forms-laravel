<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FORNECEDORES extends Model
{
    use HasFactory;

    protected $fillabe =[
        'id',
        'nome',
        'descrição',
        'peso',
        'preço de venda',
        'estoque minimo',
        'estoque máximo',
    ];
}
