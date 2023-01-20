<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index() // id , precio , nombre, categoria,stock
    {
        $productos = Producto::orderby('categoria_id')->get();
        return view('paginas/productos/index', compact('productos')); //distribuir vistas en carpetas
    }

    public function create()
    {
        $categorias = Categoria::orderby('id')->get();
        return view('paginas/productos/create', compact('categorias'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'precio' => 'required',
            'nombre' => 'required',
            'categoria_id' => 'required',
            'stock' => 'required'
        ]);

        $producto = new Producto();
        $producto->precio = $request->precio;
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria_id;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('productos.index');
    }
    public function show(Producto $producto)
    {
        $categorias = Categoria::orderBy('id')->get();
        return view('paginas/productos/show', compact('producto', 'categorias'));
    }
    public function edit(Producto $producto)
    {
        $categorias = Categoria::orderBy('id')->get();
        return view('paginas/productos/edit', compact('producto', 'categorias'));
    }
    public function update(Request $request, Producto $producto)
    {
        $this->validate($request, [
            'precio' => 'required',
            'nombre' => 'required',
            'categoria_id' => 'required',
            'stock' => 'required'
        ]);

        $producto->precio = $request->precio;
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria_id;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('productos.index');
    }
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
