<?php

namespace App\Http\Controllers;

use App\Models\Mesas;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function index()
    {
        $mesas = Mesas::orderby('id')->get();
        return view('paginas/mesas/index', compact('mesas'));
    }

    public function create()
    {
        return view('paginas/mesas/create'/* ,compact('categorias')*/);
    }


    public function store()
    {
        $mesa = new Mesas();
        $mesa->estado = "Vacia";
        $mesa->x = 80;
        $mesa->y = 80;

        $mesa->save();

        return redirect()->route('mesas.index');
    }

    public function show(Mesas $mesa)
    {
        return view('paginas/mesas/show', compact('mesa' /* ,'categorias' */));
    }


    public function edit(Mesas $mesa)
    {
        return view('paginas/mesas/edit', compact('mesa' /* ,'categoria'*/));
    }


    public function update(Request $request, Mesas $mesa)
    {
        $this->validate($request, [
            'estado' => 'required'
        ]);

        $mesa->estado = $request->estado;


        $mesa->save();

        return redirect()->route('mesas.index');

    }


    public function destroy(Mesas $mesa)
    {
        $mesa->delete();
        return redirect()->route('mesas.moverMesas');
    }

    public function moverMesas()
    {
        $mesas = Mesas::orderby('id')->get();
        return view('paginas/mesas/moverMesas', compact('mesas'));
    }

    public function guardarNuevaPosicionMesas(Request $request)
    {
        try {
            $newPosicionMesas = $request->input('newPosicionMesas');
            $mesasBD = Mesas::orderby('id')->get();
            foreach ($mesasBD as $mesaBD) {
                $mesaBD->x = $newPosicionMesas[$mesaBD->id - 1]["x"];
                $mesaBD->y = $newPosicionMesas[$mesaBD->id - 1]["y"];
                $mesaBD->save();
            }
            return response()->json(['message' => 'Success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
