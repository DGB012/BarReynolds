<?php

namespace App\Http\Controllers;

use App\Models\Cuentas;
use App\Models\LineaTicket;
use App\Models\Producto;
use Illuminate\Http\Request;

class LineaTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //	id producto_id	cantidad	precio	cuentas_id	productos_id
    {
        $lineasTickets = LineaTicket::orderby('id')->get();
        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();

        return view('paginas/lineasTickets/index', compact('lineasTickets', 'cuentas', 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();

        return view('paginas/lineasTickets/create', compact('cuentas', 'productos'));

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
            'cantidad' => 'required',
            'precio' => 'required',
            'cuentas_id' => 'required',
            'producto_id' => 'required'
        ]);

        $lineaTicket = new LineaTicket();
        $lineaTicket->cantidad = $request->cantidad;
        $lineaTicket->precio = $request->precio;
        $lineaTicket->cuentas_id = $request->cuentas_id;
        $lineaTicket->producto_id = $request->producto_id;

        $lineaTicket->save();

        return redirect()->route('lineasTickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\LineaTicket $lineaTicket
     * @return \Illuminate\Http\Response
     */
    public function show(LineaTicket $lineaTicket)
    {
        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();
        return view('paginas/lineasTickets/show', compact('lineaTicket', 'productos', 'cuentas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\LineaTicket $lineaTicket
     * @return \Illuminate\Http\Response
     */
    public function edit(LineaTicket $lineaTicket)
    {
        $cuentas = Cuentas::orderby('id')->get();
        $productos = Producto::orderby('id')->get();
        return view('paginas/lineasTickets/edit', compact('lineaTicket', 'productos', 'cuentas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LineaTicket $lineaTicket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineaTicket $lineaTicket)
    {
        $this->validate($request, [
            'cantidad' => 'required',
            'precio' => 'required',
            'cuentas_id' => 'required',
            'producto_id' => 'required'
        ]);

        $lineaTicket->cantidad = $request->cantidad;
        $lineaTicket->precio = $request->precio;
        $lineaTicket->cuentas_id = $request->cuentas_id;
        $lineaTicket->producto_id = $request->producto_id;

        $lineaTicket->save();

        return redirect()->route('pagina/lineasTickets/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\LineaTicket $lineaTicket
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineaTicket $lineaTicket)
    {
        $lineaTicket->delete();
        return redirect()->route('productos.index');
    }
}
