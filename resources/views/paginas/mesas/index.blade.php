<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class="container">

        <div class="row align-items-center">
            @foreach($mesas as $mesa)
                <div class="col-2">
                    <table border="2px">
                        <tr>
                            <td style='margin: auto; text-align: center;'>
                                <a class='mesa' href='{{ route ('cuentas.crearModifCuenta', $mesa -> id) }}'>
                                    Mesa {{$mesa->id}}<br>
                                    Estado: {{$mesa->estado}}
                                    <img class=' {{($mesa->estado == "Vacia") ? "mesaVacia" : "mesaOcupada"}}'
                                         src="/mesa.png" width="100%">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>
    </div>

    <!--<table border="2px">

        <tr>
            <th>Mesas</th>
            <th>Estado</th>
            <th>Eliminar</th>
        </tr>

        /*@foreach($mesas as $mesa)
        <tr>
            <td>
                <a href='{{ route ('cuentas.crearModifCuenta', $mesa -> id) }}'>
                        <img src="/mesa.png" width="80px" height="10%">{{ $mesa-> id }}
        </a>
    </td>
    <td>
        <a href='{{ route ('cuentas.crearModifCuenta', $mesa -> id) }}'>
                        <img src='{{($mesa->estado == "Vacia") ? "/verde.png" : "/rojo.png"}}' class="estadoMesa">
                    </a>
                </td>
                <td>
                    <form action='{{ route('mesas.destroy', $mesa) }}' method="post">
                        @method('delete')
        <button type='submit'><img src="basura.png" width="50px"></button>
    </form>
    </td>
    </tr>

    @endforeach*/

    </table>-->
    <br><br>

    <button><a href='{{ route('mesas.create') }}'> Crear </a></button>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de Productos</a>

</x-zz.base>
