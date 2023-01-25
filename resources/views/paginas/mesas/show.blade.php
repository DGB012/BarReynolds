<x-zz.base>

    <x-slot:tituloHead>Mostrar Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles de la mesas</x-slot:tituloVisible>

    <p>Mesas: {{$mesa->id}}</p>
    <p>Estado: {{$mesa->estado}}</p>

    <a href='{{route('mesas.edit', $mesa)}}'> Editar Mesas </a>

    <br/><br/>

    <a href='{{ route('mesas.index') }}'>Volver al listado de mesas</a>

</x-zz.base>
