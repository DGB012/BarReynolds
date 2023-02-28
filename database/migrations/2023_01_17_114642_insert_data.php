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
        $postreId = DB::table('categorias')->insertGetId([
            'nombre' => 'Postre'
        ]);

        //-------- PRODUCTOS --------------

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Coca Cola',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://i.pinimg.com/originals/9f/ce/4c/9fce4c4592b45b3a35f4403bc6032d92.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Coca Cola Light',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://static.vecteezy.com/system/resources/previews/000/064/053/original/coca-cola-light-logo-vector.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Coca Cola Zero',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://pbs.twimg.com/profile_images/460808129404354560/bQElwmK6_400x400.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Fanta Naranja',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://primotavolino.com/wp-content/uploads/2020/11/fanta-naranja.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Fanta Limón',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://www.lagrosella.es/wp-content/uploads/2016/04/fanta-lim%C3%B3n.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Agua(1L)',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://www.aquadeus.es/cms/wp-content/uploads/2017/05/file-15-05-2017-08-36-57-aNLC3bJChZM5G.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Aquarius Naranja',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://www.depatios.com/wp-content/uploads/2018/09/AQ-NAR-300x300.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Aquarius Limón',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://www.depatios.com/wp-content/uploads/2018/09/AQ-LIM-300x300.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Vichy',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://www.vichycatalan.com/wp-content/uploads/2018/11/01-Vichy-Catalan.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Nestea',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://1000logos.net/wp-content/uploads/2021/05/Nestea-logo.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Red Bull',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://1000logos.net/wp-content/uploads/2021/04/Red-Bull-logo-500x281.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.20',
            'nombre' => 'Schweppes',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://1000logos.net/wp-content/uploads/2020/07/Schweppes-Logo-1980-500x333.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Bitter Kas',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://cdn.domestika.org/c_fill,dpr_1.0,f_auto,h_1200,pg_1,t_base_params,w_1200/v1474646350/project-covers/000/279/058/279058-original-logo.jpg?1474646350'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Seven Up',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://1000marcas.net/wp-content/uploads/2019/12/Logo-7Up-500x281.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.50',
            'nombre' => 'Sprite',
            'categoria_id' => $bebidaId,
            'stock' => '50',
            'imagen' => 'https://primotavolino.com/wp-content/uploads/2020/11/Sprite_logo.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.80',
            'nombre' => 'Jarra o Cañón con Limón Radler',
            'categoria_id' => $cervezaId,
            'stock' => '50',
            'imagen' => 'http://regalosymuestrasgratis.com/wp-content/uploads/2015/05/muestras-gratis-cruzcampo-radler.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.80',
            'nombre' => 'Jarra Tostada Export',
            'categoria_id' => $cervezaId,
            'stock' => '50',
            'imagen' => 'https://ambar.com/wp-content/uploads/2022/02/AMBAR_EXPORT_WEB.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '2',
            'nombre' => 'Caña Tostada',
            'categoria_id' => $cervezaId,
            'stock' => '50',
            'imagen' => 'https://i1.wp.com/central-de-bebidas.com/wp-content/uploads/2020/10/2017_Mahou_00Tostada-scaled.jpg?fit=1920%2C2560&ssl=1'
        ]);

        DB::table('productos')->insert([
            'precio' => '1.80',
            'nombre' => 'Caña con Limón',
            'categoria_id' => $cervezaId,
            'stock' => '50',
            'imagen' => 'https://www.ilcapo.net/wp-content/uploads/2020/07/cerveza-radler.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.30',
            'nombre' => 'Estrella Galicia',
            'categoria_id' => $cervezaId,
            'stock' => '50',
            'imagen' => 'https://cdn.shopify.com/s/files/1/0271/8158/0388/products/estrella-galicia-escerveza-3.jpg?v=1648893181'
        ]);

        DB::table('productos')->insert([
            'precio' => '1.30',
            'nombre' => 'Zurito Tostada',
            'categoria_id' => $cervezaId,
            'stock' => '50',
            'imagen' => 'https://cdn.shopify.com/s/files/1/0271/8158/0388/products/lefebvre-hopus-escerveza-3.jpg?v=1648893553'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'El Coto',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201609/02/00118703100034____1__600x600.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Berona',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://www.supermercadosmas.com/media/catalog/product/cache/d91bc430dbe2e3d899436802c7aa5233/a/e/aecoc_08410023223959_08410023223959_c1n1.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Rioja Brodon',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://static.carrefour.es/hd_3200x_/img_pim_food/033280_00_1_Bodega.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Viña Salceda',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://static.ulabox.com/media/174398_xl.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Marques de Cáceres',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://static.ulabox.com/media/174098_xl.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '9',
            'nombre' => 'Príncipe de Viana',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://www.bouquetbrands.com/254-large_default/principe-de-viana-crianza.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Inurrieta 400',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://jamonesromero.com/wp-content/uploads/2021/09/INURRIETA-400-1.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Albret',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://static.carrefour.es/hd_1600x_/img_pim_food/832398_00_2_Bodega.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12.50',
            'nombre' => 'Pago de Cirsus',
            'categoria_id' => $vinoId,
            'stock' => '50',
            'imagen' => 'https://jamonesromero.com/wp-content/uploads/2021/09/PAGO-VENDIMIA-SELECCIONADA-3.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Calamares a la andaluza',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://pazzafamily.com/wp-content/uploads/2021/05/calamar-romana.png'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Ensalada de pimientos rojos asados',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://4.bp.blogspot.com/-lIBmiubYc0M/W8i0GNNgMOI/AAAAAAAAOYY/XTBfJ4pX0UUmtnSbcePVfG8poZevqeDpACLcBGAs/s1600/ensalada%2Bde%2Bpimientos%2Brojos%2B%25283%2529.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '20',
            'nombre' => 'Jamón Ibérico o lomo ibérico',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Jam%C3%B3n_de_Guijuelo_004_%28cropped%29_4.3.JPG/1200px-Jam%C3%B3n_de_Guijuelo_004_%28cropped%29_4.3.JPG'
        ]);

        DB::table('productos')->insert([
            'precio' => '15.50',
            'nombre' => 'Mollejas de cordero al ajo',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://okdiario.com/img/2019/12/07/receta-de-mollejas-de-cordero-al-ajillo.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '3',
            'nombre' => 'Montado de chorizo de olla',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://1.bp.blogspot.com/-Ilm3KcUFXNk/YNw4OIHAM5I/AAAAAAAE04I/TvzIScAukNkAcm0sUXSAj7Dv8p0QGcRxQCLcBGAsYHQ/s800/chorizo-2520109_1280.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '2.80',
            'nombre' => 'Montado de lomo adobado a la plancha',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://i0.wp.com/www.lacocinadeenloqui.com/wp-content/uploads/2019/04/Bocadillo-de-lomo-adobado-45.jpg?fit=1920%2C1280&ssl=1'
        ]);

        DB::table('productos')->insert([
            'precio' => '3.50',
            'nombre' => 'Montado de lomo de olla',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://1.bp.blogspot.com/-uruzIHSDua8/WomNi8W9AtI/AAAAAAAAs9A/Rqm4It15zUYQASI-C_CTf1yWzRPMJ3H3wCLcBGAs/w1200-h630-p-k-no-nu/Montaditos%2Bde%2Blomo.JPG'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Milhoja de morcilla y calabaza a la plancha',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://www.cocinasincarne.es/wp-content/uploads/2013/05/Pastel-salado-de-calabaza5.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '12',
            'nombre' => 'Oreja a la plancha',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://recetasdecocina.elmundo.es/wp-content/uploads/2022/04/oreja-a-la-plancha-crujiente.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '6',
            'nombre' => 'Patatas bravas o mixtas',
            'categoria_id' => $racionesId,
            'stock' => '50',
            'imagen' => 'https://www.goya.com/media/7699/spicy-potatoes.jpg?quality=80'
        ]);

        DB::table('productos')->insert([
            'precio' => '22',
            'nombre' => 'Entrecot Troceado',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/0e/94/2f/01/entrecot-de-vaca-rubia.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '25',
            'nombre' => 'Paletilla de Lechal',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://imag.bonviveur.com/paletilla-de-cordero-al-horno.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '18',
            'nombre' => 'Chuletillas de Lechal',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://jetextramar.com/wp-content/uploads/2021/04/chuletillas-de-cordero-lechal.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '25',
            'nombre' => 'Cachopo Asturiano',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://sivarious.com/wp-content/uploads/2018/04/CACHOPO.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '28',
            'nombre' => 'Pulpito de Ría a la Gallega',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://www.tee-travel.com/blog/wp-content/uploads/2021/08/Gastronomia-Camino-Frances-pulpo-feira.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '22',
            'nombre' => 'Pulpo a la Gallega',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://i.ytimg.com/vi/oWjmKhA6NE0/maxresdefault.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '25',
            'nombre' => 'Pulpo a la Piedra',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/14/c0/ab/19/nuestro-pulpo-a-la-piedra.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '13',
            'nombre' => 'Sepia Fresca',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://www.recetasderechupete.com/wp-content/uploads/2021/04/Sepia-al-ajillo.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '13',
            'nombre' => 'Calamares a la Romana',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://www.recetasderechupete.com/wp-content/uploads/2021/11/Calamares-a-la-romana.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '10',
            'nombre' => 'Boquerones Fritos',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://recetasdecocina.elmundo.es/wp-content/uploads/2020/10/boquerones-fritos.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Chipirones Encabollados o Plancha',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://www.pequerecetas.com/wp-content/uploads/2020/01/chipirones-encebollados.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '16',
            'nombre' => 'Chopitos Fritos',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://okdiario.com/img/recetas/2017/10/24/chopitos-fritos-2.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '22',
            'nombre' => 'Calamar de Pota a la Plancha',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://imag.bonviveur.com/calamar-a-la-plancha.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '8',
            'nombre' => 'Ensalada Mixta',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://imag.bonviveur.com/imagen-de-la-ensalada-mixta.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '15',
            'nombre' => 'Ensalada de Pimientos con Ventresca',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://static3.elcomercio.es/www/multimedia/201907/25/media/cortadas/Imagen%20adria-keR-U80839036214COC-1248x770@El%20Comercio.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '15',
            'nombre' => 'Ensalada de Tomate con Ventresca',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://cdn.elcocinerocasero.com/imagen/paso-receta/1000/2021-01-07-19-10-53/ensalada-de-ventresca-y-tomate-paso-6.jpeg'
        ]);

        DB::table('productos')->insert([
            'precio' => '8',
            'nombre' => 'Pimientos del Padrón',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://elmundoenrecetas.s3.amazonaws.com/uploads/recipe/picture/740/pimientos_del_padron.webp'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Parrillada de Verduras',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://imag.bonviveur.com/emplatado-de-la-parrillada-de-verduras-a-la-plancha.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '14',
            'nombre' => 'Ensalada de Burrata',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://www.enriquetomas.com/es/blog/wp-content/uploads/2022/07/burrata-portada.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '21',
            'nombre' => 'Alcachofas Naturales con Jamón',
            'categoria_id' => $comidaId,
            'stock' => '50',
            'imagen' => 'https://okdiario.com/img/recetas/2017/05/25/alcachofas-con-jamon.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '5',
            'nombre' => 'Cookies de chocolate',
            'categoria_id' => $postreId,
            'stock' => '50',
            'imagen' => 'https://imag.bonviveur.com/cookies-caseras-foto-principal.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '5',
            'nombre' => 'Tarta de mil hojas con crema',
            'categoria_id' => $postreId,
            'stock' => '50',
            'imagen' => 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/E07DC6A6-2F8C-49E8-857D-398AB851E779/Derivates/A2B986D9-1510-4DC9-B275-39FD863D1F24.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '5',
            'nombre' => 'Tarta de mascarpone con arándanos',
            'categoria_id' => $postreId,
            'stock' => '50',
            'imagen' => 'https://www.deliciosi.com/images/300/372/cheesecake-de-arandanos.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '5',
            'nombre' => 'Tarta de fresa casera con crema pastelera',
            'categoria_id' => $postreId,
            'stock' => '50',
            'imagen' => 'https://www.tucasaclub.com/files/content/1200x670_181.jpg'
        ]);

        DB::table('productos')->insert([
            'precio' => '5',
            'nombre' => 'Tarta de queso con coulis de frambuesa',
            'categoria_id' => $postreId,
            'stock' => '50',
            'imagen' => 'https://tartademanzanacasera.files.wordpress.com/2014/09/dsc01020.jpg?w=640&h=480'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia',
            'x' => '5',
            'y' => '5'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia',
            'x' => '15',
            'y' => '5'
        ]);

        DB::table('mesas')->insert([
            'estado' => 'Vacia',
            'x' => '25',
            'y' => '5'
        ]);

        DB::table('useres')->insert([
            'name' => 'admin',
            'rol' => 'ADM',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$TJbpxks4EQ5rc91G0l6GLerDk0jjoX2W0AtDQV/8VScX8oQBOdqmC',
            'created_at' => '2023-02-16 12:15:14',
            'updated_at' => '2023-02-16 12:15:14'
        ]);
    }


    public function down()
    {
        //
    }
};
