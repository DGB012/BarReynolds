<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class='fondo' id="fondo">
        @foreach($mesas as $mesa)
            <a href='{{ route("cuentas.crearModifCuenta",[$mesa -> id,'Bebida','0']) }}'>
                <div class="mesa {{($mesa->estado == "Vacia") ? "disponible" : "ocupada"}}"
                     style='top:{{$mesa->y}}%;  left:{{$mesa->x}}%;'>
                    <p>{{$mesa->id}}</p>
                </div>
            </a>
        @endforeach
    </div>

    <form style="display:inline;" action='{{ route('mesas.store') }}' method='post'>
        @method('post')
        <input class='button' type='submit' name='crear' value='Crear mesa'/>
    </form>
    <form style="display:inline;" action="{{route("mesas.moverMesas")}}" }>
        <input type="submit" value="Modificar posici&oacute;n mesas"/>
    </form>

</x-zz.base>
