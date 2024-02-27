<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model

{

    protected $primaryKey = 'recnum';
    protected $fillable = [
        'codigo',
        'empresa',
        'sigla',
        'razao_social',
    ];

    use HasFactory;
}
