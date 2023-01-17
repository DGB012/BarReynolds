<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        //-------- CATEGORIAS --------------
        $bebidaId = DB::table('categorias')->insertGetId([
           'nombre' => 'Bebida'
        ]);
        $cervezaId = DB::table('categorias')->insertGetId([
           'nombre' => 'Cerveza'
        ]);
        $vinoId = DB::table('categorias')->insertGetId([
           'nombre' => 'Vino'
        ]);
        $racionesId = DB::table('categorias')->insertGetId([
           'nombre' => 'Raciones'
        ]);
        $comidaId = DB::table('categorias')->insertGetId([
           'nombre' => 'Comida'
        ]);

        //-------- PRODUCTOS --------------

        DB::table('productos')->insert([
           'precio'         =>  '2',
           'nombre'      =>  'COCA COLA',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2',
           'nombre'      =>  'COCA COLA LIGHT',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2',
           'nombre'      =>  'COCA COLA ZERO',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'FANTA NARANJA',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'FANTA LIMÓN',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2',
           'nombre'      =>  'AGUA(1L)',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.30',
           'nombre'      =>  'AQUARIUS NARANJA',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.30',
           'nombre'      =>  'AQUARIUS LIMÓN',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'VICHY',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.30',
           'nombre'      =>  'NESTEA',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'RED BULL',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.20',
           'nombre'      =>  'SCHWEPPES',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'BITTER KAS',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'SEVEN UP',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'SPRITE',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.80',
           'nombre'      =>  'Jarra o Cañon con Limon Radler',
           'categoria_id'       =>  $cervezaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.80',
           'nombre'      =>  'Jarra Tostada Export',
           'categoria_id'       =>  $cervezaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2',
           'nombre'      =>  'Caña Tostada',
           'categoria_id'       =>  $cervezaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '1.80',
           'nombre'      =>  'Caña con Limón',
           'categoria_id'       =>  $cervezaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.30',
           'nombre'      =>  'Estrella Galicia',
           'categoria_id'       =>  $cervezaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '1.30',
           'nombre'      =>  'Zurito Tostada',
           'categoria_id'       =>  $cervezaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '1.20',
           'nombre'      =>  'Mini o Zurito',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'Jarra',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.50',
           'nombre'      =>  'Cañón',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '1.80',
           'nombre'      =>  'Caña',
           'categoria_id'       =>  $bebidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12',
           'nombre'      =>  'El Coto',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12.50',
           'nombre'      =>  'Berona',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12.50',
           'nombre'      =>  'Rioja Brodon',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12.50',
           'nombre'      =>  'Viña Salceda',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12',
           'nombre'      =>  'Marques de Cáceres',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '9',
           'nombre'      =>  'Príncipe de Viana',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12',
           'nombre'      =>  'Inurrieta 400',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12',
           'nombre'      =>  'Albret',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12.50',
           'nombre'      =>  'Pago de Cirsus',
           'categoria_id'       =>  $vinoId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '14',
           'nombre'      =>  'Calamares a la andaluza',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '14',
           'nombre'      =>  'Ensalada de pimientos rojos asados',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '20',
           'nombre'      =>  'Jamón Ibérico o lomo ibérico',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '15.50',
           'nombre'      =>  'Mollejas de cordero al ajo',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '3',
           'nombre'      =>  'Montado de chorizo de olla',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '2.80',
           'nombre'      =>  'Montado de lomo adobado a la plancha',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '3.50',
           'nombre'      =>  'Montado de lomo de olla',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '14',
           'nombre'      =>  'Milhoja de morcilla y calabaza a la plancha',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '12',
           'nombre'      =>  'Oreja a la plancha',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '6',
           'nombre'      =>  'Patatas bravas o mixtas',
           'categoria_id'       =>  $racionesId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '22',
           'nombre'      =>  'Entrecot Troceado',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '25',
           'nombre'      =>  'Paletilla de Lechal',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '18',
           'nombre'      =>  'Chuletillas de Lechal',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '25',
           'nombre'      =>  'Cachopo Asturiano',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '28',
           'nombre'      =>  'Pulpito de Ría a la Gallega',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '22',
           'nombre'      =>  'Pulpo a la Gallega',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '25',
           'nombre'      =>  'Pulpo a la Piedra',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '13',
           'nombre'      =>  'Sepia Fresca',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '13',
           'nombre'      =>  'Calamares a la Romana',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '10',
           'nombre'      =>  'Boquerones Fritos',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '14',
           'nombre'      =>  'Chipirones Encabollados o Plancha',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '16',
           'nombre'      =>  'Chopitos Fritos',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '22',
           'nombre'      =>  'Calamar de Pota a la Plancha',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '8',
           'nombre'      =>  'Ensalada Mixta',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '15',
           'nombre'      =>  'Ensalada de Pimientos con Ventresca',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '15',
           'nombre'      =>  'Ensalada de Tomate con Ventresca',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '8',
           'nombre'      =>  'Pimientos del Padrón',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '14',
           'nombre'      =>  'Parrillada de Verduras',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '14',
           'nombre'      =>  'Ensalada de Burrata',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);

        DB::table('productos')->insert([
           'precio'         =>  '21',
           'nombre'      =>  'Alcachofas Naturales con Jamón',
           'categoria_id'       =>  $comidaId,
           'disponibilidad'       =>  '50'
        ]);
    }


    public function down()
    {
        //
    }
};
