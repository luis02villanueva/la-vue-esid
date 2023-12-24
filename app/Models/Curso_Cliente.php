<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso_Cliente extends Model
{
    use HasFactory;

    
    protected $table = 'curso__clientes';
    protected $fillable = [
        'curso_id',
        'clientes_id',
        'lugar_trabajo',
        'area',
        'codigo',
        'registro',
        'fecha_emision',
        'nota',
    ] ;
}
