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
            'ciudad' => 'TRUJILLO',      
        ]);
    }
}
