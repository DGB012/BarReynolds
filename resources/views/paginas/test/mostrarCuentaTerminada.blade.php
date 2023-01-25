<x-zz.base>

    <x-slot:tituloHead>Pagar Cuenta {{$cuenta_id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Pagar Cuenta {{$cuenta_id}}</x-slot:tituloVisible>

    @php
        $total = 0;
    @endphp

    <br>

    <table border='1'>

        <tr>
            <th>PRODUCTO</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th>Subtotal</th>
        </tr>

        @foreach($lineasCuenta as $lineaCuenta)
            <tr>
                <td>{{$lineaCuenta->producto->nombre}}</td>
                <td>{{$lineaCuenta->precio}}</td>
                <td>{{$lineaCuenta->cantidad}}</td>
                 @php
                    $subtotal = $lineaCuenta->precio * $lineaCuenta->cantidad;
                    $total += $subtotal;
                 @endphp
                <td>{{$subtotal}}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan='2'></td>
            <td><strong>Total</strong></td>
            <td>{{$total}}</td>
        </tr>

    </table>

    <br><br>

    <button><a href="{{route('cuentas.terminarCuenta',$cuenta_id)}}">Pagar cuenta</a></button>

</x-zz.base>

