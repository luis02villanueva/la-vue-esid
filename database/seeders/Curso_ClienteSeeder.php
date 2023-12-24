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
            "lugar_trabajo"=> "Municipalidad Distrital de San Pablo",
            "area"=> "SUBGERENCIA DE ISTICA Y SERVICIOS GENERALES",
            "codigo"=> "LTO-22-PFESIGA-EP",
            "registro"=> "9835 - EP",
            "fecha_emision"=> "2022-09-23",
            "nota"=> "16",

        ]);
        Curso_Cliente::create([
            "cursos_id"=> 3,
            "clientes_id"=> 1,
            "lugar_trabajo"=> "Municipalidad Distrital de San Pablo",
            "area"=> "SUBGERENCIA DE ISTICA Y SERVICIOS GENERALES",
            "codigo"=> "LTO-22-PFESIGA-EP",
            "registro"=> "9835 - EP",
            "fecha_emision"=> "2022-09-23",
            "nota"=> "16",

        ]);
        Curso_Cliente::create([
            "cursos_id"=> 2,
            "clientes_id"=> 1,
            "lugar_trabajo"=> "Municipalidad Distrital de San Pablo",
            "area"=> "SUBGERENCIA DE ISTICA Y SERVICIOS GENERALES",
            "codigo"=> "LTO-22-PFESIGA-EP",
            "registro"=> "9835 - EP",
            "fecha_emision"=> "2022-09-23",
            "nota"=> "16",
        ]);
    }
}
