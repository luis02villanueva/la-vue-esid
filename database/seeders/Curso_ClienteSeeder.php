<?php

namespace Database\Seeders;

use App\Models\Curso_Cliente;
use Illuminate\Database\Seeder;

class Curso_ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso_Cliente::create([
            "cursos_id"=> 1,
            "clientes_id"=> 1,

        ]);
        Curso_Cliente::create([
            "cursos_id"=> 3,
            "clientes_id"=> 1,

        ]);
        Curso_Cliente::create([
            "cursos_id"=> 2,
            "clientes_id"=> 1,

        ]);
    }
}
