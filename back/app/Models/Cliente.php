<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $primaryKey = 'recnum';
    protected $fillable = [
        'empresa',
        'codigo',
        'razao_social',
        'tipo',
        'cpf_cnpj',
    ];
    use HasFactory;
}
