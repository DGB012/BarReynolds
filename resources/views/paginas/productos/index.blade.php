<x-zz.base>

    <x-slot:tituloHead>Productos</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de productos</x-slot:tituloVisible>

    <table border="1">

        <tr>
            <th>Precio</th>
            <th>Nombre</th>
            <th>Categor&iacute;a</th>
            <th>Stock</th>
            @if(Auth::user()->rol == 'ADM')
                <th>Eliminar</th>
            @endif

        </tr>

        @foreach ($productos as $producto)
            <tr>
                <td>
                    <a href='{{ route('productos.show', $producto) }}'>{{ $producto->precio }}</a>
                </td>
                <td>
                    <a href='{{ route('productos.show', $producto) }}'>{{ $producto->nombre }}</a>
                </td>
                <td>
                    <a href='{{ route('categorias.show', $producto->categoria_id) }}'>{{ $producto->categoria->nombre }}</a>
                </td>
                <td>
                    <a href='{{ route('productos.show', $producto) }}'>{{ $producto->stock }}</a>
                </td>
                @if(Auth::user()->rol == 'ADM')
                    <td class='delete'>
                        <form class="myform" id='{{ $producto->id }}'
                              action='{{ route('productos.destroy', $producto) }}'
                              method='post'>
                            @method('delete')
                            <a href="#" onclick="document.getElementById('{{ $producto->id }}').submit()">(X)</a>
                        </form>
                    </td>
                @endif

            </tr>
        @endforeach


    </table>
    <br><br>
    @if(Auth::user()->rol == 'ADM')
        <button><a href='{{ route('productos.create') }}'>Crear</a></button>
        <br><br>

        <a href='{{ route('categorias.index') }}'>Listado de categor&iacute;as</a>
        <br><br>

        <a href='{{ route('cuentas.indexLineaCuentas') }}'>Listado de l&iacute;neas de cuentas.</a>
    @endif

</x-zz.base>
