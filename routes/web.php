<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\CuentasController;
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
    return view('auth/login'); // estaba welcome para que salga la pag por defecto de laravel
});

Route::get('/mesas', function () {
    $mesas = \App\Models\Mesas::orderBy('id')->get();
    return view('mesas/index', compact('mesas'));
})->middleware(['auth', 'verified'])->name('mesas/index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('mesas', MesasController::class);

Route::get('/lineaCuentaAddProducto/{cuenta_id}/{producto_id}', [LineaCuentaController::class, 'addProducto'])->name('lineaCuenta.crearLineaNueva');

Route::resource('lineaCuentas', LineaCuentaController::class);
//Route::get('/pagarCuenta/{cuenta_id}', [LineaCuentaController::class, 'pagarCuenta'])->name('lineaCuentas.pagarCuenta');
Route::get('/pagarCuenta/{cuenta_id}/{descuento}', [LineaCuentaController::class, 'pagarCuenta'])->name('lineaCuentas.pagarCuenta');

Route::get('/cuentas/test', [CuentasController::class, 'test'])->name('test');
Route::get('/cuentas/addProducto/{cuenta}', [CuentasController::class, 'addProducto'])->name('cuentas.addProducto');
//Route::get('/cuentas/terminarCuenta/{cuenta_id}/{totalCuenta}', [CuentasController::class, 'terminarCuenta'])->name('cuentas.terminarCuenta');
Route::get('/crearModifCuenta/{mesa_id}', [CuentasController::class, 'crearModifCuenta'])->name('cuentas.crearModifCuenta');
Route::get('/terminarCuenta/{cuenta_id}/{totalCuenta}', [CuentasController::class, 'terminarCuenta'])->name('cuentas.terminarCuenta');


Route::resource('cuentas', CuentasController::class);

require __DIR__.'/auth.php';
