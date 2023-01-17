<x-zz.base>

    <x-slot:tituloHead>Editar Producto</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita los detalles del producto</x-slot:tituloVisible>

    <form action='{{ route('productos.update', $producto) }}' method='post'>
        @method('put')
        @csrf

        <x-produtos.camposProd :producto='$producto'/>

        <br><br>

        <button type='submit'>Actualizar</button>
    </form>
    <br>

    <a href='{{ route('productos.index') }}'>Volver al listado</a>

</x-zz.base>
