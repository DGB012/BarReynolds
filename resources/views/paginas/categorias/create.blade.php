<x-zz.base>

    <x-slot:tituloHead>Añadir nueva Categoria</x-slot:tituloHead>
    <x-slot:tituloVisible>Añadir nueva Categoria</x-slot:tituloVisible>

    <form action='{{ route('categorias.store') }}' method='post'>
        @method('post')

        <x-categorias.categorias_campos/>

        <input class='button' type='submit' name='crear' value='Crear Categoria'/>
    </form><br/>

    <a href='{{ route('categorias.index') }}'>Volver al listado</a>

</x-zz.base>
