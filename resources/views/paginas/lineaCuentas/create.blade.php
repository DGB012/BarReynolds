
<h1>Crear LineaCuenta</h1>

<form action='{{ route('lineaCuentas.store') }}' method='post'>
    @method('post')

    <label for='precio'>Cantidad</label>
    <input type='number' id='cantidad' name='cantidad' value='{{ $lineaCuentas->cantidad ?? '' }}'/>
    <br>
    <label for='nombre'>Precio</label>
    <input type='text' id='precio' name='precio' value='{{ $lineaCuentas->precio ?? '' }}'/>
    <br>
    <label for='cuenta_id'>Cuenta</label>
    <input type='number' id='cuentas_id' name='cuentas_id' value='{{ $lineaCuentas->cuentas_id ?? '' }}'/>
    <br>
    <label for='producto_id'>Producto</label>
    <input type='number' id='producto_id' name='producto_id' value='{{ $lineaCuentas->producto_id ?? '' }}'/>
    <br>

    <input type='submit' name='crear' value='Crear producto'/>

</form>
<br/>
