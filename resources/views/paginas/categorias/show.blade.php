<x-zz.base>

    <x-slot:tituloHead>Mostrar Categor&iacute;a</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles de la categor&iacute;a</x-slot:tituloVisible>

    <p>Nombre: {{$categoria->nombre}}</p>

    @if(Auth::user()->rol == 'ADM')
        <a href='{{route('categorias.edit', $categoria)}}'> Editar Categor&iacute;a </a>
    @endif

    <br/><br/>

    <a href='{{ route('categorias.index') }}'>Volver al listado de categor&iacute;as</a>

</x-zz.base>
