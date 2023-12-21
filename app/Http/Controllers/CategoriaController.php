<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoriaController extends Controller
{

    public function index(Request $request)
    {
        $bucarpor = $request->get("buscador");
        $categoria = DB::table("categorias")
            ->where("nombre_categoria", 'like', '%' . $bucarpor . '%')
            ->select("categorias.*")
            ->get();
        return response()->json(['categorias' => $categoria  ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {



        $categoria = new Categoria;

        $categoria->nombre_categoria = $request->input('nombre_categoria');
        $categoria->descripcion_categoria = $request->input('descripcion_categoria');

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/categorias/', $filename);
            $categoria->avatar = $filename;
        }
        $categoria->save();
        $data = [
            'message' => 'Categoria creado satisfactoriamente',
            'categoria' => $categoria,
            'status' => 200,
        ];
        return response()->json($data);
    }


    public function show($id)
    {
        $data = Categoria::findOrFail($id);
        return response()->json($data);
    }


    public function edit(Request $request, $id)
    {
        // return  response()->json(['nombre_categoria' => $request->input('nombre_categoria')]);
        // dd($request->input('nombre_categoria'));

        $categoria = Categoria::find($id);
        $categoria->nombre_categoria =      $request->input('nombre_categoria');
        $categoria->descripcion_categoria =  $request->input('descripcion_categoria');


        if ($request->hasfile('avatar')) {
            $destination = 'uploads/categorias/' . $categoria->avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avatar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/categorias/', $filename);
            $categoria->avatar = $filename;
        }

        $categoria->save();

        return "200";
    }


    public function update()
    {
    }


    public function destroy($id)
    {

        $categoria = Categoria::find($id);
        $destination = 'uploads/categorias/' . $categoria->avatar;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $categoria->delete();
        $data = [
            'message' => 'Categoria se elemino satisfactoriamente',
            'categoria' => $categoria,
            'status' => 200,
        ];
        return response()->json($data);
    }
}
