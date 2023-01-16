<x-zz.base>

    <x-slot:tituloHead>Mostrar Productos</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles del producto</x-slot:tituloVisible>

    <p>{{$producto->precio}}</p>
    <p>{{$producto->nombre}}</p>
    <p>{{$producto->categoria}}</p>
    <p>{{$producto->disponibilidad}}</p>

    <a href='{{ route('productos.edit', $producto) }}'>Editarla</a>

    <br/><br/>

    <form id='{{ $producto->id }}' action='{{ route('productos.destroy', $producto) }}'
          method='post'>
        @method('delete')

        <input class='button' type='submit' name='crear' value='Eliminar producto'/>
    </form>

    <br>

    <a href='{{ route('productos.index') }}'>Volver al listado de productos.</a>

</x-zz.base>
