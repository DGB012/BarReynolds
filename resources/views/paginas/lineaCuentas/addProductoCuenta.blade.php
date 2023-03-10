<x-zz.base>

    <x-slot:tituloHead>Cuenta {{$cuenta->id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Cuenta {{$cuenta->id}}</x-slot:tituloVisible>

    <br><br>
    <p hidden name='categoria'>{{$categoria}}</p>

    <div class='container-fluid'>
        <div class='row'>
            <div class='col-8'>
                <button><a href="{{route('mesas.index')}}">&larr; Volver a las mesas</a></button>
                <br><br>
                @foreach ($categorias as $categoria)
                    <button
                        onclick="cambiarVisibilidad('{{$categoria->nombre}}', '{{count($categorias)}}')">{{$categoria->nombre}}</button>
                @endforeach
                <br><br>
                @foreach ($productos as $producto)
                    <button class='prueba' name={{$producto->categoria->nombre}}>
                        <img src='{{ $producto->imagen }}' height='50'>
                        <a href='{{ route('cuentas.crearLineaNueva',['cuenta_id'=>$cuenta->id,'producto' => $producto]) }}'>{{$producto->nombre}}</a>
                    </button>
                @endforeach
            </div>
            <div class='col-4'>
                @php
                    $total = 0;
                @endphp

                <input hidden value={{$mesas_id}} id="mesa_id"></input>

                <br>

                <label for="descuento">Establecer descuento:</label>
                <input type="number" id="descuento" min="0" max="100" placeholder="%"></input>
                <button id="enviarDescuento" onclick="confirmarDescuento()">Confirmar</button>

                <table border='1'>

                    <tr>
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>Subtotal</th>
                        <th>Invitar</th>
                    </tr>

                    {{--                    @foreach($cuenta->productos as $producto)--}}
                    @foreach($cuenta->productos as $producto)
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->pivot->precio}}???</td>
                            <td>{{$producto->pivot->cantidad}}</td>
                            @php
                                $subtotal = $producto->pivot->precio * $producto->pivot->cantidad;
                                $total += $subtotal;
                            @endphp
                            <td>{{$subtotal}}???</td>
                            @if($producto->pivot->precio != 0)
                                <td>
                                    <button>
                                        <a href='{{ route('cuentas.invitarProducto',['cuenta_id'=>$cuenta->id,'producto_id' => $producto->id]) }}'>Invitar</a>
                                    </button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    @if($descuento != 0)
                        <tr>
                            <td colspan="2"></td>
                            <td><strong>Descuento({{$descuento}}%)</strong></td>
                            <td>-{{number_format($total*$descuento/100 ,2)}}???</td>
                        </tr>
                    @endif
                    <tr>
                        <td colspan='2'></td>
                        <td><strong>Total</strong></td>
                        <td>{{number_format($total - ($total*$descuento/100),2)}}???</td>
                    </tr>

                </table>

                <br><br>

                <button><a href="{{route('cuentas.terminarCuenta',[$cuenta->id, $total - ($total*$descuento/100)])}}">Pagar
                        cuenta</a></button>

                <br><br>


                @if(Auth::user()->rol == 'ADM' && !$mesasVacias->isEmpty())
                    <p>Cambiar cuenta de mesa:</p>
                    <form action="{{ route('cuentas.cambiarMesa')}}" method="get">
                        @method("get")
                        <select id="mesaNueva" name="mesaNueva">
                            @foreach($mesasVacias as $mesaVacia)
                                <option value="{{$mesaVacia->id}}">Mesa {{$mesaVacia->id}}</option>
                            @endforeach
                        </select>
                        <input hidden id="idCuenta" name="idCuenta" value="{{$cuenta->id}}"{{$cuenta->id}}/>
                        <input hidden id="mesaAntigua" name="mesaAntigua" value="{{$mesas_id}}"{{$mesas_id}}/>
                        <button type="submit">Cambiar</button>
                    </form>
                @endif


            </div>
        </div>
    </div>


</x-zz.base>

