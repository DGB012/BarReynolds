<p>{{$lineaCuenta->precio}}</p>
<p>{{$lineaCuenta->nombre}}</p>
<p>{{$lineaCuenta->categoria_id}}</p>
<p>{{$lineaCuenta->disponibilidad}}</p>

<a href='{{ route('lineaCuentas.edit', $producto) }}'>Editarla</a>

<br/><br/>

<form id='{{ $producto->id }}' action='{{ route('lineaCuentas.destroy', $producto) }}'
      method='post'>
    @method('delete')

    <input class='button' type='submit' name='crear' value='Eliminar linea de Cuenta'/>
</form>

<br>

<a href='{{ route('lineaCuentas.index') }}'>Volver al listado de lineas de cuentas.</a>
