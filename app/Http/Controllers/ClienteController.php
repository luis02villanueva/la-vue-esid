<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Curso_Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{

    public function index()
    {

        $cliente = DB::table("clientes")
            ->select('id', 'nombre_cliente', 'dni', 'codigo', 'registro', 'tema_curso', 'fecha_emision')
            ->get();
        return response()->json($cliente);
    }


    public function create(Request $request)
    {
    }
    public function obtenerDetalles(Request $request)
    {
        $id = $request->id;
        $cursos_cliente = DB::table('curso__clientes')
            ->select('nombre_cliente', 'nombre_curso')
            ->join('clientes', 'clientes.id', '=', 'curso__clientes.clientes_id')
            ->join('cursos', 'cursos.id', '=', 'curso__clientes.cursos_id')
            ->where('curso__clientes.clientes_id', '=', $id)
            ->get();
        return response()->json($cursos_cliente);
    }

    public function store(Request $request)
    {
        $clientes = new Cliente;
        $clientes->nombre_cliente = $request->input('nombre_cliente');
        $clientes->dni = $request->input('dni');
        $clientes->celular = $request->input('celular');
        $clientes->correo = $request->input('correo');
        $clientes->lugar_trabajo = $request->input('lugar_trabajo');
        $clientes->area = $request->input('area');
        $clientes->ciudad = $request->input('ciudad');
        $clientes->codigo = $request->input('codigo');
        $clientes->registro = $request->input('registro');
        $clientes->fecha_emision = $request->input('fecha_emision');
        $clientes->horas_lectivas = $request->input('horas_lectivas');
        $clientes->fecha_inicio = $request->input('fecha_inicio');
        $clientes->fecha_fin = $request->input('fecha_fin');
        $clientes->tema_curso = $request->input('tema_curso');
        $clientes->nota = $request->input('nota');
       
        $clientes->save();


        //Array de detalles
        //Recorro todos los elementos

        // foreach ($clientes as $ep => $det) {
        //     $detalle = new Curso_Cliente();
        //     $detalle->clientes_id =  $clientes->id;
        //     $detalle->save();
        // }
        $data = [
            'message' => 'clientes creado satisfactoriamente',
            'clientes' => $clientes,

            'status' => 200,
        ];
        return response()->json($data);
    }


    public function show($id)
    {
        $data = Cliente::findOrFail($id);
        return response()->json($data);
    }


    public function edit(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->nombre_cliente = $request->input('nombre_cliente');
        $clientes->dni = $request->input('dni');
        $clientes->celular = $request->input('celular');
        $clientes->correo = $request->input('correo');
        $clientes->lugar_trabajo = $request->input('lugar_trabajo');
        $clientes->area = $request->input('area');
        $clientes->ciudad = $request->input('ciudad');
        $clientes->codigo = $request->input('codigo');
        $clientes->registro = $request->input('registro');
        $clientes->fecha_emision = $request->input('fecha_emision');
        $clientes->horas_lectivas = $request->input('horas_lectivas');
        $clientes->fecha_inicio = $request->input('fecha_inicio');
        $clientes->fecha_fin = $request->input('fecha_fin');
        $clientes->tema_curso = $request->input('tema_curso');
        $clientes->nota = $request->input('nota');
        
        $clientes->update();
        $data = [
            'message' => 'clientes actualizado satisfactoriamente',
            'clientes' => $clientes,
            'status' => 200,
        ];
        return response()->json($data);
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
        $clientes = Cliente::find($id);

        $clientes->delete();
        $data = [
            'message' => 'Categoria se elemino satisfactoriamente',
            'categoria' => $clientes,
            'status' => 200,
        ];
        return response()->json($data);
    }
}
