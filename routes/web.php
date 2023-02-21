<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\LineaCuentaController;

//Route::get('/', function () {
//    return view('auth/login'); // estaba welcome para que salga la pag por defecto de laravel
//});

Route::redirect('/', 'login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categorias', CategoriaController::class);

    Route::resource('productos', ProductoController::class);

    Route::resource('mesas', MesasController::class);
    Route::get('/moverMesas', [MesasController::class, 'moverMesas'])->name('mesas.moverMesas');
    Route::post('/guardarNuevaPosicionMesas', [MesasController::class, 'guardarNuevaPosicionMesas'])->name('mesas.guardarNuevaPosicionMesas');

    Route::resource('lineaCuentas', LineaCuentaController::class);

    Route::resource('cuentas', CuentasController::class);
    Route::get('/cambiarMesa', [CuentasController::class, 'cambiarMesa'])->name('cuentas.cambiarMesa');
    Route::get('/cuentas/addProducto/{cuenta}', [CuentasController::class, 'addProducto'])->name('cuentas.addProducto');
    Route::get('/cuentas/indexLineaCuentas', [CuentasController::class, 'indexLineaCuentas'])->name('cuentas.indexLineaCuentas');
    Route::get('/terminarCuenta/{cuenta_id}/{totalCuenta}', [CuentasController::class, 'terminarCuenta'])->name('cuentas.terminarCuenta');
    Route::get('/lineaCuentaAddProducto/{cuenta_id}/{producto}', [CuentasController::class, 'addProducto'])->name('cuentas.crearLineaNueva');
    Route::get('/lineaCuentaFreeProducto/{cuenta_id}/{producto_id}', [CuentasController::class, 'freeProducto'])->name('cuentas.invitarProducto');
    Route::get('/crearModifCuenta/{mesa_id}/{categoria}/{descuento}', [CuentasController::class, 'crearModifCuenta'])->name('cuentas.crearModifCuenta');
});

require __DIR__ . '/auth.php';
