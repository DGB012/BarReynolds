<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <table border="2px">

        <tr>
            <th>Mesas</th>
            <th>Estado</th>
            <th>Eliminar</th>
        </tr>

        @foreach($mesas as $mesa)
            <tr>
                <td>
                    <a href='{{ route ('productos.index', $mesa) }}'><img src="/mesa.png" width="80px"
                                                                          height="10%">{{ $mesa-> id }} </a>
                </td>
                <td>
                    <a href='{{ route ('cuentas.crearModifCuenta', $mesa -> id) }}'>
                        <img src='{{($mesa->estado == "Vacia") ? "/verde.png" : "/rojo.png"}}' class="estadoMesa"></a>
                </td>
                <td>
                    <form action='{{ route('mesas.destroy', $mesa) }}' method="post">
                        @method('delete')

                        <button type='submit'><img src="basura.png" width="50px"></button>
                    </form>
                </td>
            </tr>
        @endforeach


    </table>
    <br><br>

    <button><a href='{{ route('mesas.create') }}'> Crear </a></button>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de Productos</a>

</x-zz.base>
