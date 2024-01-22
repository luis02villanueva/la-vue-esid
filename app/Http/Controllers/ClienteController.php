<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Curso_Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ClienteImport;

class ClienteController extends Controller
{

  public function index(Request $request)
    {
        $idCourse = $request->query('idCourse', null);
        $searchClient = $request->query('searchClient', '');
        if (is_numeric($searchClient)) {
            $attribute = 'clientes.dni';
        }else{
            $attribute = 'clientes.nombre_cliente';
        }
        if($idCourse){
            $clientes = DB::table("curso__clientes")
                ->select('clientes.id', 'nombre_cliente', 'dni','ciudad',
                DB::raw('GROUP_CONCAT(codigo) as codigos'),
                DB::raw('GROUP_CONCAT(registro) as registros'))
                ->join('clientes','curso__clientes.clientes_id','=','clientes.id')
                ->groupBy('clientes.id', 'nombre_cliente', 'dni','ciudad')
                ->where('curso__clientes.cursos_id', $idCourse)
                ->where($attribute, 'LIKE', "%$searchClient%")
                ->orderBy('clientes.created_at', 'desc')
                ->get();
        }else{
            $clientes = DB::table("curso__clientes")
                ->select('clientes.id', 'nombre_cliente', 'dni','ciudad',
                DB::raw('GROUP_CONCAT(codigo) as codigos'),
                DB::raw('GROUP_CONCAT(registro) as registros'))
                ->join('clientes','curso__clientes.clientes_id','=','clientes.id')
                ->groupBy('clientes.id', 'nombre_cliente', 'dni','ciudad')
                ->where($attribute, 'LIKE', "%$searchClient%")
                ->orderBy('clientes.created_at', 'desc')
                ->get();
        }
        foreach ($clientes as $cliente){
            $cursos = DB::table("curso__clientes")
            ->select('cursos.id','nombre_curso'
            ,'descripcion_curso','fecha_inicio','fecha_inicio'
            ,'fecha_fin',
                'horas_lectivas')
            ->join('cursos','curso__clientes.cursos_id','=','cursos.id')
            ->groupBy('cursos.id','nombre_curso','descripcion_curso','fecha_inicio','fecha_inicio'
            ,'fecha_fin',
                'horas_lectivas')
            ->where('curso__clientes.clientes_id',$cliente->id)
            ->get();
            $cliente->cursos = $cursos;
        }
        return response()->json($clientes);
    }
    public function getConvertDate(string $excelData)
    {
        return date("Y-m-d", strtotime("1899-12-30 +{$excelData} days"));
    }
    public function saveExcelCliente(Request $request)
    {
        try {
            $cursos_id = $request->input('curso_id');
            $data = Excel::toArray(new ClienteImport, $request->file('file'));
            //$usuarios = (new UsersImport)->toArray($request->file("files"));
            $headers = $data[0][0];
            $clientes = [];
            for ($i = 1; $i < count($data[0]); $i++) {
                $cliente = new Cliente();
                foreach ($headers as $index => $header) {
                    $cliente->{$header} = $data[0][$i][$index];
                }
                $clientes[] = $cliente;
            }
            foreach ($clientes as $cliente) {
                $client = DB::table("clientes")
                    ->where('dni', $cliente->dni)
                    ->first();
                if ($client) {
                    $curso_cliente = new Curso_Cliente;
                    $curso_cliente->cursos_id = intval($cursos_id);
                    $curso_cliente->clientes_id = $client->id;
                    $curso_cliente->lugar_trabajo = $cliente->lugar_trabajo;
                    $curso_cliente->area = $cliente->area;
                    $curso_cliente->codigo = $cliente->codigo;
                    $curso_cliente->registro = $cliente->registro;
                    $curso_cliente->fecha_emision = $this->getConvertDate($cliente->fecha_emision);
                    $curso_cliente->nota = $cliente->nota;
                    $curso_cliente->save();
                } else {
                    $client_new = new Cliente;
                    $client_new->nombre_cliente = $cliente->nombres;
                    $client_new->dni = $cliente->dni;
                    $client_new->celular = $cliente->celular;
                    $client_new->ciudad = $cliente->ciudad;
                    $client_new->correo = $cliente->correo;
                    $client_new->save();

                    $curso_cliente = new Curso_Cliente;
                    $curso_cliente->cursos_id = intval($cursos_id);
                    $curso_cliente->clientes_id = $client_new->id;
                    $curso_cliente->lugar_trabajo = $cliente->lugar_trabajo;
                    $curso_cliente->area = $cliente->area;
                    $curso_cliente->codigo = $cliente->codigo;
                    $curso_cliente->registro = $cliente->registro;
                    $curso_cliente->fecha_emision = $this->getConvertDate($cliente->fecha_emision);
                    $curso_cliente->nota = $cliente->nota;
                    $curso_cliente->save();
                }
            }
            return response()->json('Import success', 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
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

        $courses = json_decode($request->input('courses'), true);
        $clientes = new Cliente;
        $clientes->nombre_cliente = $request->input('nombre_cliente');
        $clientes->dni = $request->input('dni');
        $clientes->celular = $request->input('celular');
        $clientes->correo = $request->input('correo');
        $clientes->ciudad = $request->input('ciudad');
        $clientes->save();
        foreach ($courses as $course) {
            $detalle = new Curso_Cliente();
            $detalle->clientes_id = $clientes->id;
            $detalle->cursos_id = intval($course["id"]);
            $detalle->lugar_trabajo =  $course["lugar_trabajo"];
            $detalle->area =  $course["area"];
            $detalle->codigo =  $course["codigo"];
            $detalle->registro =  $course["registro"];
            $detalle->fecha_emision =  $course["fecha_emision"];
            $detalle->nota =  $course["nota"];
            $detalle->save();
        }
        $data = [
            'message' => 'Cliente creado satisfactoriamente',
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
