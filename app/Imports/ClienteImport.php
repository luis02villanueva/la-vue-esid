<?php

namespace App\Imports;

use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\ToModel;

class ClienteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cliente([
            
            'nombres' => $row['nombres'],
            'dni'=> $row['dni'],
            'celular'=> $row['celular'],
            'correo'=> $row['correo'],
            'lugar_trabajo'=> $row['lugar_trabajo'],
            'area'=> $row['area'],
            'ciudad'=> $row['ciudad'],
            'codigo'=> $row['codigo'],
            'registro' => $row['registro'],
            'fecha_emision' =>  $this->getConvertDate($row['fecha_emision']),
            'horas_lectivas' => $row['horas_lectivas'],
            'fecha_inicio' =>  $this->getConvertDate($row['fecha_inicio']),
            'fecha_fin' =>$this->getConvertDate($row['fecha_fin']),
            'tema_curso' => $row['tema_curso'],
            'nota' => $row['nota'],
        ]);
    }

    public function getConvertDate(string $excelData){
        return date("Y-m-d", strtotime("1899-12-30 +{$excelData} days"));
    }
}
