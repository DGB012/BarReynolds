<x-zz.base>

    <x-slot:tituloHead>Cuenta {{$cuenta->id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Cuenta {{$cuenta->id}}</x-slot:tituloVisible>

    <br><br>
    {{--    <p>{{$cuenta->id}}</p>--}}
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-8'>
                @foreach ($categorias as $categoria)
                    <button
                        onclick="cambiarVisibilidad('{{$categoria->nombre}}', '{{count($categorias)}}')">{{$categoria->nombre}}</button>
                @endforeach
                <br><br>
                @foreach ($productos as $producto)
                    <button class='prueba' name={{$producto->categoria->nombre}}>
                        <img src='{{ $producto->imagen }}' height='50'>
                        <a href='{{ route('lineaCuenta.crearLineaNueva',['cuenta_id'=>$cuenta->id,'producto_id' => $producto->id]) }}'>{{$producto->nombre}}</a>
                    </button>
                @endforeach
                <br><br>
                <button><a href="{{route('mesas.index')}}">Volver a las mesas</a></button>
                {{--                <button><a href="{{route('lineaCuentas.pagarCuenta',[$cuenta->id, 0])}}">Pagar cuenta</a></button>--}}
            </div>
            <div class='col-4'>
                @php
                    $total = 0;
                @endphp

                <input hidden value={{$mesas_id}} id="mesa_id"></input>

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

                <button><a href="{{route('cuentas.terminarCuenta',[$cuenta->id, $total - ($total*$descuento/100)])}}">Pagar
                        cuenta</a></button>
            </div>
        </div>
    </div>


</x-zz.base>

