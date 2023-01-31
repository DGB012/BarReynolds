<!--suppress CssUnknownTarget -->

<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class='container-fluid a'>
        <div class="row ">
            @foreach($mesas as $mesa)
                <div class="col-1 b">
                    <a href='{{ route("cuentas.crearModifCuenta",$mesa -> id) }}'>
                        <img src='{{($mesa->estado == "Vacia") ? "/mesa".$mesa -> id."Dispo.png" : "/mesa".$mesa -> id."ocup.png"}}' >
                    </a>
                </div>
            @endforeach
                @foreach($mesas as $mesa)
                    <div class="col-1 c">
                        <a href='{{ route("cuentas.crearModifCuenta",$mesa -> id) }}'>
                            <img src='{{($mesa->estado == "Vacia") ? "/mesa1Dispo.png" : "/mesa1ocup.png"}}' >
                        </a>
                    </div>
                @endforeach
        </div>
    </div>


    <button><a href='{{ route('mesas.create') }}'> Crear </a></button>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de Productos</a>

</x-zz.base>
