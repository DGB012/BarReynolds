<x-zz.base>

    <x-slot:tituloHead>Productos</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de productos</x-slot:tituloVisible>

    <table border='1'>

        <tr>
            <th>PRECIO</th>
            <th>NOMBRE</th>
            <th>CATEGORIA</th>
            <th>DISPONIBILIDAD</th>
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
                    <a href='{{ route('productos.show', $producto->categoria_id) }}'>{{ $producto->categorias->nombre }}</a>
                </td>
                <td>
                    <a href='{{ route('productos.show', $producto) }}'>{{ $producto->disponibilidad }}</a>
                </td>
                <td class='delete'>
                    <form class="myform" id='{{ $producto->id }}' action='{{ route('productos.destroy', $producto) }}'
                          method='post'>
                        @method('delete')
                        <a href="#" onclick="document.getElementById('{{ $producto->id }}').submit()">(X)</a>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <br><br>

    <button><a href='{{ route('productos.create') }}'>Crear</a></button>
    <br>

</x-zz.base>
