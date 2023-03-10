<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\LineaCuenta;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Mesas;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CuentasController extends Controller
{
    public function index()
    {
        $cuentas = Cuenta::orderBy('id')->get();
        return view('paginas/cuentas/index', compact('cuentas'));

    }

    public function create()
    {
        return view('paginas/cuentas/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mesas_id' => 'required',
        ]);

        $cuenta = new Cuenta();
        $cuenta->nombre = $request->nombre;
        $cuenta->save();

        return redirect()->route('cuentas.index');
    }

    public function show(Cuenta $cuentas)
    {
        return view('paginas/cuentas/show', compact('cuentas'));
    }

    public function edit(Cuenta $cuentas)
    {
        return view('paginas/cuentas/edit', compact('cuentas'));
    }

    public function update(Request $request, Cuenta $cuentas)
    {
//            $this->validate($request, [
//                'nombre' => 'required',
//            ]);
//
//            $cuentas->nombre = $request->nombre;
//            $cuentas->save();

        return redirect()->route('cuentas.index');
    }

    public function destroy(Cuenta $cuentas)
    {
        $cuentas->delete();
        return redirect()->route('cuentas.index');
    }

    public function test()
    {
        return view('paginas/test/testCuenta');
    }

    public function crearModifCuenta(int $mesas, string $categoria, int $descuento)
    {
//            $mesas_id = $mesas->id;
        $mesas_id = $mesas;
        //Deberia de venir el objeto desde la ventana anterior
        $mesa = Mesas::find($mesas);
        if ($mesa->estado == 'Vacia') {
            $cuenta = new Cuenta();
            $cuenta->mesas_id = $mesas_id;
            $cuenta->total = 0.00;
            $cuenta->save();

            //Habria que crear un metodo para hacer esto
            $mesa->estado = 'Ocupada';
            $mesa->save();

        } else if ($mesa->estado == 'Ocupada') {
            $cuenta = Cuenta::firstOrCreate(['mesas_id' => $mesas_id, 'total' => 0.00]);
        }

        $mesasVacias = DB::table('mesas')->where('estado', '=', 'Vacia')->get();

        $productos = Producto::orderBy('nombre')->get();
        $categorias = Categoria::orderBy('id')->get();

//            return redirect()-> route('cuentas.addProducto',['cuenta'=>$cuenta]);
        return view('paginas/lineaCuentas/addProductoCuenta', compact('cuenta', 'productos', 'categorias', 'categoria', 'mesas_id', 'descuento', 'mesasVacias'));
    }
//        public function addProducto(Cuenta $cuenta){
//            return view('paginas/test/testAddProducto', compact('cuenta'));
//        }


    public function terminarCuenta(int $id_cuenta, float $totalCuenta)
    {
        $cuenta = Cuenta::find($id_cuenta);
        $cuenta->total = $totalCuenta;

        $mesa = Mesas::find($cuenta->mesas_id);
        $mesa->estado = "Vacia";

        $cuenta->save();
        $mesa->save();

        return redirect()->route('mesas.index');
    }

    public function addProducto(int $cuenta_id, Producto $producto)
    {
        $cuenta = Cuenta::findOrFail($cuenta_id);
        $producto = Producto::find($producto->id);
        if (!$cuenta->productos()->where('id', $producto->id)->wherePivot('precio', $producto->precio)->exists()) {
            $cuenta->productos()->attach($producto, [
                'cantidad' => 1,
                'precio' => $producto->precio,
            ]);

        } else {
            $cuenta->productos()->where('id', $producto->id)->wherePivot('precio', $producto->precio)->increment('cantidad', 1);

        }

        $producto->stock -= 1;
        $producto->save();
        return redirect()->route('cuentas.crearModifCuenta', [$cuenta->mesas_id, $producto->categoria->nombre, 0]);
    }

    public function freeProducto(int $cuenta_id, int $producto_id)
    {
        $cuenta = Cuenta::findOrFail($cuenta_id);
        $producto = Producto::find($producto_id);
        if ($cuenta->productos()->where('id', $producto->id)->wherePivot('precio', 0)->exists()) {  //crear nueva linea cuenta con el producto  a precio 0 si no existe ya
            $cuenta->productos()->where('id', $producto->id)->wherePivot('precio', 0)->increment('cantidad', 1);
        } else { //a??adir cantidad a producto con precio 0 que ya esta creado
            $cuenta->productos()->attach($producto, [
                'cantidad' => 1,
                'precio' => 0,
            ]);


        }

        //Restar cantidad de las que vas a pagar
        $cuenta->productos()->where('id', $producto->id)->wherePivot('precio', $producto->precio)->decrement('cantidad', 1);

        //borrar linea que pagas si la cantidad ya es 0
//        if($lineasCuentaSinDescuento->cantidad == 0){
        if ($cuenta->productos()->where('id', $producto->id)->wherePivot('precio', $producto->precio)->wherePivot('cantidad', 0)->exists()) {
//            $lineasCuentaSinDescuento->delete();
            $cuenta->productos()->where('id', $producto->id)->wherePivot('precio', $producto->precio)->detach();
        }

        return redirect()->route('cuentas.crearModifCuenta', [$cuenta->mesas_id, $producto->categoria->nombre, 0]);

    }

    public function indexLineaCuentas()
    {
        $cuentas = Cuenta::orderBy('id')->get();
        return view('paginas/lineaCuentas/index', compact('cuentas'));
    }

    public function cambiarMesa(Request $request)
    {
        //recoger valores de id de las dos mesas antigua y nueva
        $idMesaAntigua = $request->mesaAntigua;
        $idMesaNueva = $request->mesaNueva;

        $mesaNueva = Mesas::find($idMesaNueva);
        $mesaNueva->estado = "Ocupada";
        $mesaNueva->save();

        $mesaAntigua = Mesas::find($idMesaAntigua);
        $mesaAntigua->estado = "Vacia";
        $mesaAntigua->save();

        //Le estableces a la cuenta la nueva mesa en la que va.

        $idCuenta = $request->idCuenta;
        $cuenta = Cuenta::find($idCuenta);
        $cuenta->mesas_id = $idMesaNueva;
        $cuenta->save();

        return redirect()->route('mesas.index');
    }
}
