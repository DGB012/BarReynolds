<x-zz.base>

    <x-slot:tituloHead>Categor&iacute;as</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de categor&iacute;as</x-slot:tituloVisible>

    <table>

        <tr>
            <th>Categor&iacute;a</th>
            <th>Eliminar</th>
        </tr>

        @foreach($categorias as $categoria)
            <tr>
                <td>
                    <a href='{{ route ('categorias.show', $categoria) }}'>{{ $categoria-> nombre }} </a>
                </td>
                <td>
                    <form action='{{ route('categorias.destroy', $categoria) }}' method="post">
                        @method('delete')

                        <button type='submit'>(X)</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <br><br>

    <button><a href='{{ route('categorias.create') }}'> Crear </a></button>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de Productos</a>

</x-zz.base>
