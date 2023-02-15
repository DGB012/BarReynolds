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

        @foreach($cuentas as $cuenta)
            @foreach($cuenta->productos as $producto)
            <tr>

                <td>{{$producto->pivot->cantidad}}</td>
                <td>{{$producto->pivot->precio}}€</td>
                <td>{{$cuenta->id}}</td>
                <td>{{$producto->nombre}}</td>
            </tr>
            @endforeach
        @endforeach
    </table>

    <button><a href='{{ route('lineaCuentas.create') }}'>Crear</a></button>
    <br><br>

    <a href='{{ route('categorias.index') }}'>Listado de categor&iacute;as</a>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de productos</a>

</x-zz.base>
