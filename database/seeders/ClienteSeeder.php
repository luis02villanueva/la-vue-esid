<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Cliente::create([
            'nombre_cliente' => 'JORGE SOLORZANO VILLANUEVA',
            'dni' => '75528724 ',
            'celular' => '999570099',
            'correo' => 'admin@gmail.com',
            'lugar_trabajo' => 'ESID PERU',
            'area' => 'SISTEMAS',
            'ciudad' => 'TRUJILLO',
            'codigo' => 'ABCD14789 ',
            'registro' => '9835 - EP ',
            'fecha_emision' => '2023-12-12',
            'horas_lectivas' => '250 HORAS ',
            'fecha_inicio' => '2023-12-12 ',
            'fecha_fin' => '2023-12-19 ',
            'tema_curso' => 'PROGRAMA DE FORMACIÓN DE ESPECIALISTAS SISTEMA INTEGRADO DE GESTIÓN ADMINISTRATIVA ',
            'nota' => '20 DE NOTA',         
        ]);
    }
}
