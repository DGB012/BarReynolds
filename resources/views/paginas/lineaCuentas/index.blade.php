<x-zz.base>

    <x-slot:tituloHead>L&iacute;neas de Cuentas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de L&iacute;neas de Cuentas</x-slot:tituloVisible>

    <table border='1'>
        <tr>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>CUENTA_ID</th>
            <th>PRODUCTO</th>
        </tr>

        @foreach($lineasCuentas as $lineaCuenta)
            <tr>
                <td>{{$lineaCuenta->cantidad}}</td>
                <td>{{$lineaCuenta->precio}}</td>
                <td>{{$lineaCuenta->cuentas_id}}</td>
                <td>{{$lineaCuenta->producto->nombre}}</td>
            </tr>
        @endforeach
    </table>

    <button><a href='{{ route('lineaCuentas.create') }}'>Crear</a></button>
    <br><br>

    <a href='{{ route('categorias.index') }}'>Listado de categor&iacute;as</a>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de productos</a>

</x-zz.base>
