<x-zz.base>

    <x-slot:tituloHead>Editar Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita los detalles de la mesas</x-slot:tituloVisible>

    <form action='{{ route('mesas.update', $mesa)}}' method= 'post'>
        @method('put')

        <x-mesas.mesas_campos :mesa='$mesa'/>



      <input class='button' type='submit' name='crear' value='Editar Mesas'/>
    </form><br>

    <a href='{{ route('mesas.index') }}'>Volver al listado</a>

</x-zz.base>
