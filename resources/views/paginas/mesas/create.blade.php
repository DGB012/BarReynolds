<x-zz.base>

    <x-slot:tituloHead>Añadir nueva Mesa</x-slot:tituloHead>
    <x-slot:tituloVisible>Añadir nueva mesa</x-slot:tituloVisible>

    <form action='{{ route('mesas.store') }}' method='post'>
        @method('post')

        <x-mesas.mesas_campos/>

        <input class='button' type='submit' name='crear' value='Crear mesa'/>
    </form><br/>

    <a href='{{ route('mesas.index') }}'>Volver al listado</a>

</x-zz.base>
