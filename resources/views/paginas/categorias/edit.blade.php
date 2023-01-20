<x-zz.base>

    <x-slot:tituloHead>Editar Categor&iacute;a</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita los detalles de la categor&iacute;a</x-slot:tituloVisible>

    <form action='{{ route('categorias.update', $categoria)}}' method= 'post'>
        @method('put')

        <x-categorias.categorias_campos>
            <x-slot:nombre_cat>
                {{ $categoria->nombre }}
            </x-slot:nombre_cat>
        </x-categorias.categorias_campos>

        <input class='button' type='submit' name='crear' value='Editar Categor&iacute;a'/>
    </form>
    <br>

    <a href='{{ route('categorias.index') }}'>Volver al listado</a>

</x-zz.base>
