<?php

    namespace App\Http\Controllers;

    use App\Models\Cuentas;
    use App\Models\Mesas;
    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\DB;

    class CuentasController extends Controller
    {
        public function index()
        {
            $cuentas = cuentas::orderBy('id')->get();
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

            $cuenta = new Cuentas();
            $cuenta->nombre = $request->nombre;
            $cuenta->save();

            return redirect()->route('cuentas.index');
        }

        public function show(Cuentas $cuentas)
        {
            return view('paginas/cuentas/show', compact('cuentas'));
        }

        public function edit(Cuentas $cuentas)
        {
            return view('paginas/cuentas/edit', compact('cuentas'));
        }

        public function update(Request $request, Cuentas $cuentas)
        {
//            $this->validate($request, [
//                'nombre' => 'required',
//            ]);
//
//            $cuentas->nombre = $request->nombre;
//            $cuentas->save();

            return redirect()->route('cuentas.index');
        }

        public function destroy(Cuentas $cuentas)
        {
            $cuentas->delete();
            return redirect()->route('cuentas.index');
        }

        public function test()
        {
            return view('paginas/test/testCuenta');
        }
        public function crearCuentaDesdeMesas(int $mesas){
//            $mesas_id = $mesas->id;
            $mesas_id = $mesas;
            //Deberia de venir desde la ventana anterior
//            $mesa = DB::table('mesas')
//                ->where(['id', '=', $mesas],['estado', '=', 'vacia'])
//                ->where('id', '=', $mesas)
//                ->first();
            $mesa=Mesas::find($mesas);
            if($mesa->estado=='Vacia'){
                $cuenta = new Cuentas();
                $cuenta->mesas_id = $mesas_id;
                $cuenta->total = 0.00;
                $cuenta->save();

                //Habria que crear un metodo para hacer esto
                $mesa->estado='Ocupada';
                $mesa->save();

            }else if($mesa->estado=='Ocupada'){
                $cuenta=Cuentas::firstOrCreate(['mesas_id' => $mesas_id]);
            }

            return redirect()-> route('cuentas.addProducto',['cuenta'=>$cuenta]);

        }
        public function addProducto(Cuentas $cuenta){
            return view('paginas/test/testAddProducto', compact('cuenta'));
        }
    }
