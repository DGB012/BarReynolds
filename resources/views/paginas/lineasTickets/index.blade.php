<h1>Listado de Lineas de tickets</h1>

<table>
    <tr>
        <th>CANTIDAD</th>
        <th>PRECIO</th>
        <th>CUENTA_ID</th>
        <th>PRODUCTO_ID</th>
    </tr>

    @foreach($lineasTickets as $lineaTicket)
        <tr>
            <td>{{$lineaTicket->cantidad}}</td>
            <td>{{$lineaTicket->precio}}</td>
            <td>{{$lineaTicket->cuentas_id}}</td>
            <td>{{$lineaTicket->producto_id}}</td>
        </tr>
    @endforeach
</table>

<button><a href='{{ route('lineasTickets.create') }}'>Crear</a></button><br>





