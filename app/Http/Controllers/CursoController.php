<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = DB::table("cursos")
            ->select( 'cursos.id','nombre_categoria', 'nombre_curso','descripcion_curso', 'avatar', 'avatar_cursos','cursos.estado')
            ->where('cursos.estado',1)
            ->join('categorias', 'categorias.id', '=', 'cursos.categoria_id')
           
            ->get();
        return response()->json($cursos);
    }




    public function store(Request $request)
    {
        $cursos = new Curso;
        $cursos->nombre_curso = $request->input('nombre_curso');
        $cursos->descripcion_curso = $request->input('descripcion_curso');
        $cursos->categoria_id = $request->input('categoria_id');


        if ($request->hasfile('avatar_cursos')) {
            $file = $request->file('avatar_cursos');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/cursoss/', $filename);
            $cursos->avatar_cursos = $filename;
        }
        $cursos->save();
        $data = [
            
            'status' => 200,
        ];
        return response()->json($data);
    }


    public function show($id)
    {
        $data = Curso::findOrFail($id);
        
        return response()->json($data);
    }


    public function edit(Request $request, $id)
    {
        $cursos = Curso::find($id);

        $cursos->nombre_curso = $request->input('nombre_curso');
        $cursos->descripcion_curso = $request->input('descripcion_curso');
        $cursos->categoria_id = $request->input('categoria_id');

        if ($request->hasfile('avatar_cursos')) {
            $destination = 'uploads/cursos/' . $cursos->avatar_cursos;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avatar_cursos');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/cursoss/', $filename);
            $cursos->avatar_cursos = $filename;
        }

     

        $cursos->save();

        return "200";
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        $cursos = Curso::find($id);
        $destination = 'uploads/cursoss/' . $cursos->avatar_cursos;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $cursos->delete();
        $data = [
            'message' => 'cursos se elemino satisfactoriamente',
            'cursos' => $cursos,
            'status' => 200,
        ];
        return response()->json($data);
    }
}
