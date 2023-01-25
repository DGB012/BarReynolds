<x-zz.base>

    <x-slot:tituloHead>Pagar Cuenta {{$cuenta_id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Pagar Cuenta {{$cuenta_id}}</x-slot:tituloVisible>

    <br><br>

    <table border='1'>
        <tr>
            <th>CANTIDAD</th>
            <th>PRODUCTO</th>
            <th>PRECIO</th>
        </tr>

        @foreach($lineasCuenta as $lineaCuenta)
            <tr>
                <td>{{$lineaCuenta->cantidad}}</td>
                <td>{{$lineaCuenta->producto->nombre}}</td>
                <td>{{$lineaCuenta->precio}}</td>
            </tr>
        @endforeach
    </table>

    <button><a href="{{route('cuentas.terminarCuenta',$cuenta_id)}}">Pagar cuenta</a></button>

</x-zz.base>

