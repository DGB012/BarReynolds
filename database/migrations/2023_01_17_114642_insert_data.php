<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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
            'precio' => '2',
            'nombre' => 'Coca Cola',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Coca Cola Light',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Coca Cola Zero',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Fanta Naranja',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Fanta Limón',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Agua(1L)',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Aquarius Naranja',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Aquarius Limón',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Vichy',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Nestea',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Red Bull',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.20',
            'nombre' => 'Schweppes',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Bitter Kas',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Seven Up',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Sprite',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.80',
            'nombre' => 'Jarra o Cañón con Limón Radler',
            'categoria_id' => $cervezaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.80',
            'nombre' => 'Jarra Tostada Export',
            'categoria_id' => $cervezaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Caña Tostada',
            'categoria_id' => $cervezaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '1.80',
            'nombre' => 'Caña con Limón',
            'categoria_id' => $cervezaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Estrella Galicia',
            'categoria_id' => $cervezaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '1.30',
            'nombre' => 'Zurito Tostada',
            'categoria_id' => $cervezaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '1.20',
            'nombre' => 'Mini o Zurito',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Jarra',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Cañón',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '1.80',
            'nombre' => 'Caña',
            'categoria_id' => $bebidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'El Coto',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Berona',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Rioja Brodon',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Viña Salceda',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Marques de Cáceres',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '9',
            'nombre' => 'Príncipe de Viana',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Inurrieta 400',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Albret',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Pago de Cirsus',
            'categoria_id' => $vinoId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Calamares a la andaluza',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Ensalada de pimientos rojos asados',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '20',
            'nombre' => 'Jamón Ibérico o lomo ibérico',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '15.50',
            'nombre' => 'Mollejas de cordero al ajo',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '3',
            'nombre' => 'Montado de chorizo de olla',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.80',
            'nombre' => 'Montado de lomo adobado a la plancha',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '3.50',
            'nombre' => 'Montado de lomo de olla',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Milhoja de morcilla y calabaza a la plancha',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Oreja a la plancha',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '6',
            'nombre' => 'Patatas bravas o mixtas',
            'categoria_id' => $racionesId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '22',
            'nombre' => 'Entrecot Troceado',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '25',
            'nombre' => 'Paletilla de Lechal',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '18',
            'nombre' => 'Chuletillas de Lechal',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '25',
            'nombre' => 'Cachopo Asturiano',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '28',
            'nombre' => 'Pulpito de Ría a la Gallega',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '22',
            'nombre' => 'Pulpo a la Gallega',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '25',
            'nombre' => 'Pulpo a la Piedra',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '13',
            'nombre' => 'Sepia Fresca',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '13',
            'nombre' => 'Calamares a la Romana',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '10',
            'nombre' => 'Boquerones Fritos',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Chipirones Encabollados o Plancha',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '16',
            'nombre' => 'Chopitos Fritos',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '22',
            'nombre' => 'Calamar de Pota a la Plancha',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '8',
            'nombre' => 'Ensalada Mixta',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '15',
            'nombre' => 'Ensalada de Pimientos con Ventresca',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '15',
            'nombre' => 'Ensalada de Tomate con Ventresca',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '8',
            'nombre' => 'Pimientos del Padrón',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Parrillada de Verduras',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Ensalada de Burrata',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('productos')->insert([
            'precio' => '21',
            'nombre' => 'Alcachofas Naturales con Jamón',
            'categoria_id' => $comidaId,
            'stock' => '50'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia'
        ]);
    }


    public function down()
    {
        //
    }
};
