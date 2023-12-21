<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Categoria::create([
            'nombre_categoria' => 'PROGRAMAS DE ESPECIALIZACION',
            'descripcion_categoria' => 'PROGRAMAS',
            'avatar' => '1702308721.jpeg',
        ]);

        Categoria::create([
            'nombre_categoria' => 'CURSOS  DE ESPECIALIZACION',
            'descripcion_categoria' => 'CURSOS ',
            'avatar' => '1702309661.jpeg',
        ]);

        Categoria::create([
            'nombre_categoria' => 'NUESTROS CURSOS',
            'descripcion_categoria' => 'CURSOS ',
            'avatar' => '1702309661.jpeg',
        ]);
    }
}
