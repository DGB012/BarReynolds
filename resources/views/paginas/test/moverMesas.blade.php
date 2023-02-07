<!--suppress CssUnknownTarget -->

<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class='fondo' id="fondo">
        @foreach($mesas as $mesa)
            <div class="mesa {{($mesa->estado == "Vacia") ? "disponible" : "ocupada"}}"
                 style='top:{{$mesa->y}}%;  left:{{$mesa->x}}%;'>
                <p>{{$mesa->id}}</p>
            </div>
        @endforeach
    </div>


    <input class='button' type='submit' name='crear' value='Guardar posicion mesas' onclick="guardarPosicionMesas();"/>
    <form action="{{route("mesas.index")}}" }>
        <input type="submit" value="Volver a mesas"/>
    </form>
    {{--    <form action='{{ route('mesas.store') }}' method='post'>--}}
    {{--        @method('post')--}}
    {{--        <input class='button' type='submit' name='crear' value='Guardar posicion mesas'/>--}}
    {{--    </form>--}}
    <script src="/js/moverMesas.js" defer></script>
</x-zz.base>
