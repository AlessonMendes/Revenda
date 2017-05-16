<?php

namespace App\Http\Controllers;

use App\marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcasController extends Controller
{
    public function index()
    {
        $marcas = DB::table('marcas')->get();
        return view('marcas.index', ['marcas' => $marcas]);
    }

    public function show()
    {
        return view('marcas.show');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $marca = new Marca();
            foreach (array_keys($request->marca) as $key) {
                $marca->$key = $request->marca[$key];
            }
            $marca->save();
            return redirect()->route('marcas');
        }
        $marca = new Marca();
        return view('marcas.form',['marca'=>$marca, 'editar'=> false ]);
    }
    public function update(Request $request){
        if ($request->isMethod('post')) {
            $marca = Marca::find($request->id);
            foreach (array_keys($request->marca) as $key) {
                $marca->$key = $request->marca[$key];
            }
            $marca->save();
            return redirect()->route('marcas');
        } else {
            $marcas = DB::table('marcas')->where('id', '=', $request->id)->first();
            return view('marcas.form', ['marca' => $marcas, 'editar' => true]);
        }
    }
    public function delete(Request $request){
        Marca::find($request->id)->delete();
        return redirect()->route('marcas');
    }
}
