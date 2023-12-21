<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $fillable = [
        'id',
        'nombre_categoria',
        'descripcion_categoria',
        'avatar',
        'estado'
    ] ;

    public $timestamps = false;
    public function Cursos()
    {
        return $this->hasMany(Curso::class,'categoria_id','id');
    }
}
