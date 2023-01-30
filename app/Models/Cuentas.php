<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Cuentas extends Model
{
    use HasFactory;
//    protected $fillable = ['mesas_id','total'];
    /*
        public function actualizarTotal(){

            $lineasCuenta=DB::table('linea_cuentas')
                ->where([['cuentas_id', '=',$this->id]])
                ->get();

            foreach($lineasCuenta as $lineaCuenta){
                $precio = $lineaCuenta->precio;
                $cantidad = $lineaCuenta->cantidad;
                $precioLinea = $precio * $cantidad;
                $totalCuenta = $totalCuenta + $precioLinea;
            }
            $this->total = $totalCuenta;
            $this->save();
        }
    */
}
