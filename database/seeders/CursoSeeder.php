<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Curso::create([
            'nombre_curso' => 'GESTION PUBLICA',
            'descripcion_curso' => 'GESTION ',
            'avatar_cursos' => '124522.png',
            'fecha_inicio' => '2022-07-20',
            'fecha_fin' => '2022-09-21',
            'hora_lectivas' => '336',
            'categoria_id' => 1,
        ]);

       
        Curso::create([
            'nombre_curso' => 'COMPRAS Y BIENES INFERIORES A 8 UIT',
            'descripcion_curso' => 'Curso donde se dicta buenos temas ',
            'avatar_cursos' => '124522.png',
            'fecha_inicio' => '2022-07-20',
            'fecha_fin' => '2022-09-21',
            'hora_lectivas' => '336',
            'categoria_id' => 2,
        ]);

        Curso::create([
            'nombre_curso' => 'FORMACION DE GESTORES LOGISTICOS',
            'descripcion_curso' => 'Curso donde se dicta buenos temas ',
            'avatar_cursos' => '124522.png',
            'fecha_inicio' => '2022-07-20',
            'fecha_fin' => '2022-09-21',
            'hora_lectivas' => '336',
            'categoria_id' => 3,
        ]);
    }
}
