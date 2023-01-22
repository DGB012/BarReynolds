<?php

    namespace App\Http\Controllers;

    use App\Models\Cuentas;
    use Illuminate\Http\Request;

    class CuentasController extends Controller
    {
        public function index()
        {
            $cuentas= cuentas::orderBy('id')->get();
//        return view('paginas/cuentas/index', compact('cuentas'));
            return view('testCuentas.blade.php', compact('cuentas'));
        }

        public function create()
        {
            return view('paginas/cuentas/create');
        }

        public function store(Request $request)
        {
            $this->validate($request,[
                'mesas_id' => 'required',
            ]);

            $cuenta = new Cuentas();
            $cuenta -> nombre = $request->nombre;
            $cuenta ->save();

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
            $this ->validate($request,[
                'nombre' => 'required',
            ]);

            $cuentas->nombre = $request->nombre;
            $cuentas->save();

            return redirect()->route('cuentas.index');
        }

        public function destroy(Cuentas $cuentas)
        {
            $cuentas->delete();
            return redirect()->route('cuentas.index');
        }
    }
