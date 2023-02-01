<x-zz.base>

    <x-slot:tituloHead>Pagar Cuenta {{$cuenta_id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Pagar Cuenta {{$cuenta_id}}</x-slot:tituloVisible>

    @php
        $total = 0;
    @endphp

    <input hidden value={{$cuenta_id}} id="cuenta_id"></input>

    <br>

    <label for="descuento">Establecer descuento:</label>
    <select id="descuento">
        <option selected disabled>Descuento</option>
        <option value="0">0%</option>
        <option value="5">5%</option>
        <option value="10">10%</option>
    </select>

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
            <td>{{$total - ($total*$descuento/100)}}</td>
        </tr>

    </table>


    <br><br>

    <button><a href="{{route('cuentas.terminarCuenta',[$cuenta_id, $total])}}">Pagar
            cuenta</a></button>

</x-zz.base>

