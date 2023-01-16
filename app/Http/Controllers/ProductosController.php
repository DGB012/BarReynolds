<?php

/* ¿Queremos un show de productos? igual para info mas detallada kcal, ingredientes..
               ...productos index?

    La tabla se esta llamando Productos es un poco lioso.
    Soy Dani, si hay lío con el nombre de la tabla la puedo eliminar y volverla a crear con el nombre en singular,
    pero lo que hay en esta rama habría que eliminarla, por lo tánto lo cambiaré tanto en la main como en esta para que
    no haya problemas de que hay cosas diferentes.

    Por otro lado estoy viendo que en productos las categorías de los productos, los has indicado como
    categoria_id, pero en este caso para que funcionase de esa manera debería de crear otra tabla la cual solo
    tenga las categorías que podrían tener los productos. O que ya de por sí que en cada producto tenga escrito como una
    cadena de texto la categoría.
*/

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() // id , precio , nombre, categoria,disponibilidad
    {
        $productos = Productos::orderby('id')->get();
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
     * @param \App\Models\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //$categorias = Categoria::orderBy('id')->get();
        return view('productos.show', compact('productos' /* ,'categorias' */));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //$categorias = Categoria::orderBy('id')->get();
        return view('productos.edit', compact($productos /* ,'categoria'*/));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
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
     * @param \App\Models\Productos $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        $productos->delete();
        return redirect()->route('productos.index');
    }
}
