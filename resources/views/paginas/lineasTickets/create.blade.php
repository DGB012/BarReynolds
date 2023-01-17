
<h1>Crear LineaTicket</h1>

<form action='{{ route('lineasTickets.store') }}' method='post'>
    @method('post')

<label for='precio'>Cantidad</label>
<input type='number' id='cantidad' name='precio' value='{{ $lineasTickets->cantidad ?? '' }}'/>
<br>
<label for='nombre'>Precio</label>
<input type='text' id='precio' name='precio' value='{{ $lineasTickets->precio ?? '' }}'/>
<br>
<label for='cuenta_id'>Cuenta</label>
<input type='number' id='cuenta_id' name='cuenta_id' value='{{ $lineasTickets->cuenta_id ?? '' }}'/>
<br>
<label for='producto_id'>Producto</label>
<input type='number' id='producto_id' name='producto_id' value='{{ $lineasTickets->producto_id ?? '' }}'/>
<br>

<input type='submit' name='crear' value='Crear producto'/>

</form>
<br/>
