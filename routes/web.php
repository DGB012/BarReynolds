<?php

    use App\Http\Controllers\CuentasController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ProductoController;
    use App\Http\Controllers\CategoriaController;
    use App\Http\Controllers\LineaCuentaController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('categorias', CategoriaController::class);
    Route::resource('productos', ProductoController::class);


    Route::get('/lineaCuentaAddProducto/{cuenta_id}/{producto_id}', [LineaCuentaController::class, 'addProducto'])->name('lineaCuenta.crearLineaNueva');

    Route::resource('lineaCuentas', \App\Http\Controllers\LineaCuentaController::class);


    Route::get('/cuentas/test', [CuentasController::class, 'test'])->name('test');
    Route::get('/cuentas/addProducto/{cuenta}', [CuentasController::class, 'addProducto'])->name('cuentas.addProducto');
    Route::get('/crearModifCuenta/{mesa_id}', [CuentasController::class, 'crearModifCuenta'])->name('cuentas.crearModifCuenta');
    Route::get('/terminarCuenta/{cuenta_id}', [CuentasController::class, 'terminarCuenta'])->name('cuentas.terminarCuenta');


Route::resource('cuentas', CuentasController::class);


