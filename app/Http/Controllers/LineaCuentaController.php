<?php

namespace App\Http\Controllers;

use App\Models\Cuentas;
use App\Models\LineaCuenta;
use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use SebastianBergmann\Diff\Line;

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

        return redirect()->route('paginas/lineaCuentas/index');
    }

    public function destroy(LineaCuenta $lineaCuenta)
    {
        $lineaCuenta->delete();
        return redirect()->route('productos.index');
    }

    /*
        public function addProducto(int $cuenta_id,int $producto_id){
            $lineaCuenta = new LineaCuenta(); //se crea una nueva linea de cuenta
            $lineaCuenta->cuentas_id = $cuenta_id; //realacion cuenta id con la linea de cuenta
            $producto = DB::table('productos')
                ->where('id', '=', $producto_id)
                ->first();
            $lineaCuenta->producto_id = $producto_id;
            $lineaCuenta->precio = $producto->precio;
            $lineaCuenta->cantidad = 1;
            $lineaCuenta->save();
            return redirect()-> route('mesas.index');
        }
    */
    public function addProducto(int $cuenta_id, Producto $producto)
    {
        $lineasCuenta = DB::table('linea_cuentas')
            ->where([['cuentas_id', '=', $cuenta_id], ['producto_id', '=', $producto->id], ['precio', '>', 0]])
            ->get();
        $mesa = DB::table('cuentas')
            ->where([['id', '=', $cuenta_id]])
            ->get();
        /*
        $producto = DB::table('productos')
            ->where('id', '=', $producto_id)
            ->get();
        */
        $producto = Producto::find($producto->id);

        if ($lineasCuenta->count() == 0 ) {
            $lineaCuenta = new LineaCuenta();
            $lineaCuenta->cuentas_id = $cuenta_id;
            $lineaCuenta->producto_id = $producto->id;
            $lineaCuenta->precio = $producto->precio;
            $lineaCuenta->cantidad = 1;
            $lineaCuenta->save();

        } else {

           // $lineaCuenta = LineaCuenta::firstOrCreate(['cuentas_id' => $cuenta_id, 'producto_id' => $producto->id]);
            $lineaCuenta = LineaCuenta::find($lineasCuenta[0]->id);
            $lineaCuenta->cantidad = $lineaCuenta->cantidad + 1;
            $lineaCuenta->save();
        }

        $producto->stock -= 1;
        $producto->save();
        return redirect()->route('cuentas.crearModifCuenta', [$mesa[0]->mesas_id, $producto->categoria->nombre, 0]);
    }

    public function freeProducto(int $cuenta_id, int $producto_id){

        $lineasCuenta = DB::table('linea_cuentas') //lineas de cuenta con precio 0
            ->where([['cuentas_id', '=', $cuenta_id], ['producto_id', '=', $producto_id],['precio',"=",0]])
            ->get();

        $mesa = DB::table('cuentas')
            ->where([['id', '=', $cuenta_id]])
            ->get();

        $producto = Producto::find($producto_id);

        if ($lineasCuenta->count() == 0) {  //crear nueva linea cuenta con el producto  a precio 0 si no existe ya
            $lineaCuenta = new LineaCuenta();
            $lineaCuenta->cuentas_id = $cuenta_id;
            $lineaCuenta->producto_id = $producto->id;
            $lineaCuenta->cantidad = 1;
            $lineaCuenta->precio = 0;
            $lineaCuenta->save();

        } else { //añadir cantidad a producto con precio 0 que ya esta creado

            $lineaCuenta = LineaCuenta::firstOrCreate(['cuentas_id' => $cuenta_id, 'producto_id' => $producto->id , 'precio' => 0]);
            $lineaCuenta->cantidad = $lineaCuenta->cantidad + 1;
            $lineaCuenta->save();
        }

        //Restar cantidad de las que vas a pagar
        $lineasCuentaSinDescuento = LineaCuenta::firstOrCreate(['cuentas_id' => $cuenta_id, 'producto_id' => $producto->id]);
        $lineasCuentaSinDescuento->cantidad = $lineasCuentaSinDescuento->cantidad - 1 ;
        $lineasCuentaSinDescuento->save();

        //borrar linea que pagas si la cantidad ya es 0
        if($lineasCuentaSinDescuento->cantidad == 0){
            $lineasCuentaSinDescuento->delete();
        }

        return redirect()->route('cuentas.crearModifCuenta', [$mesa[0]->mesas_id, $producto->categoria->nombre, 0]);

    }

}
