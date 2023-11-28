<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digital extends Model
{
    use HasFactory;
    protected $table = 'TBL_FOTO_MAILING_WINOVER';
    protected $primaryKey = 'CPF';

    protected $fillable = [
        'CPF',
        'NOME_CLIENTE',
        'DIAS_ATRASO',
        'VALOR_DIVIDA',
        'CARTEIRA',
        'SEGMENTO'
    ];

    public $timestamps = false;
}
