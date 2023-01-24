<x-zz.base>

    <x-slot:tituloHead>Cuenta {{$cuenta->id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Cuenta {{$cuenta->id}}</x-slot:tituloVisible>

    <br>
    <p>{{$cuenta->id}}</p>
    @foreach ($categorias as $categoria)
        <button
            onclick="cambiarVisibilidad('{{$categoria->nombre}}', '{{count($categorias)}}')">{{$categoria->nombre}}</button>
    @endforeach
    <br><br>
    @foreach ($productos as $producto)
        <button class='prueba' name={{$producto->categoria->nombre}}>
            <a href='{{ route('lineaCuenta.crearLineaNueva',['cuenta_id'=>$cuenta->id,'producto_id' => $producto->id]) }}'>{{$producto->nombre}}</a>
        </button>
    @endforeach

</x-zz.base>
