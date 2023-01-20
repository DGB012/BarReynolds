<x-zz.base>

    <x-slot:tituloHead>Crear Producto</x-slot:tituloHead>
    <x-slot:tituloVisible>Crear un Producto</x-slot:tituloVisible>

    <form action='{{ route('productos.store') }}' method='post'>
        @method('post')

        <x-productos.camposProd :categorias='$categorias'/>

        <input type='submit' name='crear' value='Crear producto'/>
    </form>
    <br/>

    <a href='{{ route('productos.index') }}'>Volver al listado</a>

</x-zz.base>
