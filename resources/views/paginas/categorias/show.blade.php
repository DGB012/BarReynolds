<x-zz.base>

    <x.slot:tituloHead>Mostrar Categoria</x.slot:tituloHead>
    <x.slot:tituloVisible>Mostrar los detalles de la categoria</x.slot:tituloVisible>

    <p>Nombre: {{$categoria->nombre}}</p>

    <a href='{{route('categorias.edit', $categoria)}}'> Editar Categoria </a>

    <br/><br/>

    <a href='{{ route('categorias.index') }}'>Volver al listado de categorias</a>

</x-zz.base>
