<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Curso_Cliente;
use Illuminate\Support\Facades\DB;

class CursoClienteController extends Controller
{
  
    public function index()
    {
        
        $cursos_cliente = DB::table('curso__clientes')
        ->select('nombre_cliente','nombre_curso')
        ->join('clientes','clientes.id','=','curso__clientes.clientes_id')
        ->join('cursos','cursos.id','=','curso__clientes.cursos_id')
        ->get();
        return response()->json($cursos_cliente);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
        $curso_detalle = new Curso_Cliente;
        $curso_detalle ->curso_id=json_decode($request->input('curso_id'));
        


    }

  
    public function show(Curso_Cliente $curso_Cliente)
    {
        //
    }

   
    public function edit(Curso_Cliente $curso_Cliente)
    {
        //
    }

  
    public function update(Request $request, Curso_Cliente $curso_Cliente)
    {
        //
    }

  
    public function destroy(Curso_Cliente $curso_Cliente)
    {
        //
    }
}
