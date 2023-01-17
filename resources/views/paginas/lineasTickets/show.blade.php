

    <p>{{$lineaTicket->precio}}</p>
    <p>{{$lineaTicket->nombre}}</p>
    <p>{{$lineaTicket->categoria_id}}</p>
    <p>{{$lineaTIcket->disponibilidad}}</p>

    <a href='{{ route('productos.edit', $producto) }}'>Editarla</a>

    <br/><br/>

    <form id='{{ $producto->id }}' action='{{ route('productos.destroy', $producto) }}'
          method='post'>
        @method('delete')

        <input class='button' type='submit' name='crear' value='Eliminar producto'/>
    </form>

    <br>

    <a href='{{ route('productos.index') }}'>Volver al listado de productos.</a>
