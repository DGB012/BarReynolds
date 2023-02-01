<!--suppress CssUnknownTarget -->

<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class='container-fluid a'>
        <div class="row align-items-center ">
            <div class='b'></div>
            @foreach($mesas as $mesa)
                <div class="col-1 c">
                    <a class="mesa" href='{{ route("cuentas.crearModifCuenta",$mesa -> id) }}'>
                        <img src='{{($mesa->estado == "Vacia") ? "/mesaD.png" : "/mesaO.png"}}'>
                        <!--    <div class="row ">
                                <div class="col-6 b">
                                    <img src='{ {($mesa->estado == "Vacia") ? "/mesaD.png" : "/mesaO.png"}}' >
                                </div> -->
                        <!--    </div> -->
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <button><a href='{{ route('mesas.create') }}'> Crear </a></button>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de Productos</a>

</x-zz.base>
