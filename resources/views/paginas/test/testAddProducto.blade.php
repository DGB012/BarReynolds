<x-zz.base>

    <x-slot:tituloHead>Cuenta {{$cuenta->id}}</x-slot:tituloHead>
    <x-slot:tituloVisible>Cuenta {{$cuenta->id}}</x-slot:tituloVisible>

    <br><br>
    <p>{{$cuenta->id}}</p>
    @foreach ($categorias as $categoria)
        <button onclick="cambiarVisibilidad({{$categoria->nombre}},{{$categorias}})">{{$categoria->nombre}}</button>
    @endforeach
    @foreach ($productos as $producto)
        <button name={{$producto->categoria->nombre}}><a
                href='{{ route('lineaCuenta.crearLineaNueva',['cuenta_id'=>$cuenta->id,'producto_id' => $producto->id]) }}'>Add
                {{$producto->nombre}}</a></button>
    @endforeach
</x-zz.base>
