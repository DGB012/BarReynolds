<?php

namespace App\Http\Controllers;

use App\Models\Cuentas;
use App\Models\LineaCuenta;
use App\Models\Producto;
use Illuminate\Http\Request;

class LineaCuentaController extends Controller
{
    public function index() //	id producto_id	cantidad	precio	cuentas_id	productos_id
    {
        $lineasCuentas = LineaCuenta::orderby('id')->get();
        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();

        return view('paginas/lineaCuentas/index', compact('lineasCuentas', 'cuentas', 'productos'));
    }

    public function create()
    {

        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();

        return view('paginas/lineaCuentas/create', compact('cuentas', 'productos'));

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'cantidad' => 'required',
            'precio' => 'required',
            'cuentas_id' => 'required',
            'producto_id' => 'required'
        ]);

        $lineaTicket = new LineaCuenta();
        $lineaTicket->cantidad = $request->cantidad;
        $lineaTicket->precio = $request->precio;
        $lineaTicket->cuentas_id = $request->cuentas_id;
        $lineaTicket->producto_id = $request->producto_id;

        $lineaTicket->save();

        return redirect()->route('lineaCuentas.index');
    }

    public function show(LineaCuenta $lineaCuenta)
    {
        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();
        return view('paginas/lineaCuentas/show', compact('lineaCuenta', 'productos', 'cuentas'));
    }

    public function edit(LineaCuenta $lineaCuenta)
    {
        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();
        return view('paginas/lineaCuentas/edit', compact('lineaCuenta', 'productos', 'cuentas'));

    }

    public function update(Request $request, LineaCuenta $lineaCuenta)
    {
        $this->validate($request, [
            'cantidad' => 'required',
            'precio' => 'required',
            'cuentas_id' => 'required',
            'producto_id' => 'required'
        ]);

        $lineaCuenta->cantidad = $request->cantidad;
        $lineaCuenta->precio = $request->precio;
        $lineaCuenta->cuentas_id = $request->cuentas_id;
        $lineaCuenta->producto_id = $request->producto_id;

        $lineaCuenta->save();

        return redirect()->route('pagina/lineaCuentas/index');
    }

    public function destroy(LineaCuenta $lineaCuenta)
    {
        $lineaCuenta->delete();
        return redirect()->route('productos.index');
    }
}
