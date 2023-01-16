<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // id , precio , nombre, categoria,disponibilidad
    {
        $productos = Producto::orderby('id')->get();
        return view('productos.index', compact('productos')); //distribuir vistas en carpetas
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categorias = Categoria::orderby('id')->get();
        return view('productos.create'/* ,compact('categorias')*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'precio' => 'required',
            'nombre' => 'required',
            'categoria_id' => 'required',
            'disponibilidad' => 'required'
        ]);

        $producto = new Producto();
        $producto->precio = $request->precio;
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria_id;
        $producto->disponibilidad = $request->disponibilidad;

        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $productos)
    {
        //$categorias = Categoria::orderBy('id')->get();
        return view('productos.show', compact('productos' /* ,'categorias' */));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $productos)
    {
        //$categorias = Categoria::orderBy('id')->get();
        return view('productos.edit', compact($productos /* ,'categoria'*/));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $this->validate($request, [
            'precio' => 'required',
            'nombre' => 'required',
            'categoria_id' => 'required',
            'disponibilidad' => 'required'
        ]);

        $productos->precio = $request->precio;
        $productos->nombre = $request->nombre;
        $productos->categoria_id = $request->categoria_id;
        $productos->disponibilidad = $request->disponibilidad;

        $productos->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
