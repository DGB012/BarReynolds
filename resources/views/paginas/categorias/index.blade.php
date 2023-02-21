<x-zz.base>

    <x-slot:tituloHead>Categor&iacute;as</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de categor&iacute;as</x-slot:tituloVisible>

    <table>

        <tr>
            <th>Categor&iacute;a</th>
            @if(Auth::user()->rol == 'ADM')
                <th>Eliminar</th>
            @endif
        </tr>

        @foreach($categorias as $categoria)
            <tr>
                <td>
                    <a href='{{ route ('categorias.show', $categoria) }}'>{{ $categoria-> nombre }} </a>
                </td>
                @if(Auth::user()->rol == 'ADM')
                    <td>
                        <form action='{{ route('categorias.destroy', $categoria) }}' method="post">
                            @method('delete')

                            <button type='submit'>(X)</button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach

    </table>
    <br><br>

    <a href='{{ route('productos.index') }}'>Listado de Productos</a>
    <br><br>
    @if(Auth::user()->rol == 'ADM')
        <button><a href='{{ route('categorias.create') }}'> Crear </a></button>
        <br><br>
        <a href='{{ route('cuentas.indexLineaCuentas') }}'>Listado de l&iacute;neas de cuentas.</a>
    @endif

</x-zz.base>
