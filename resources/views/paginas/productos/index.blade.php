<x-zz.base>

    <x-slot:tituloHead>Personas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de personas</x-slot:tituloVisible>

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
                    <a href='{{ route('productos.show', $producto) }}'>{{ $producto->categoria_id }}</a>
                </td>
                <td>
                    <a href='{{ route('productos.show', $producto) }}'>{{ $producto->disponibilidad }}</a>
                </td>
            </tr>
        @endforeach

    </table>
    <br><br>

    <button><a href='{{ route('productos.create') }}'>Crear</a></button>
    <br>

</x-zz.base>
