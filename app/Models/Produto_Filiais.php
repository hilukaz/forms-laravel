<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto_Filiais extends Model
{
    use HasFactory;

    protected $fillable = [
        'filial_id',
        'produto_id',
        'preco_venda',
        'estoque_minimo',
        'estoque_maximo',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');//nome da classe e o id
    }

    public function filial()
    {
        return $this->belongsTo(Filial::class, 'filial_id');//essa aqui é uma FK
    }
}
