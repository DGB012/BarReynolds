<x-zz.base>

    <x-slot:tituloHead>Mostrar Productos</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles del producto</x-slot:tituloVisible>

    <p>Precio: {{$productos->precio}}</p>
    <p>Nombre: {{$productos->nombre}}</p>
    <p>Categorías: {{$productos->categoria_id}}</p>
    <p>Disponibilidad: {{$productos->disponibilidad}}</p>

    {{--    <a href='{{ route('productos.edit', $productos) }}'>Editarla</a>--}}

    <br/><br/>

    {{--    <form id='{{ $productos->id }}' action='{{ route('productos.destroy', $productos) }}'--}}
    {{--          method='post'>--}}
    {{--        @method('delete')--}}

    {{--        <input class='button' type='submit' name='crear' value='Eliminar producto'/>--}}
    {{--    </form>--}}

    <br>

    <a href='{{ route('productos.index') }}'>Volver al listado de productos.</a>

</x-zz.base>
