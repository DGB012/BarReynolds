<!--suppress CssUnknownTarget -->

<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class='a' id="fondo">
        @foreach($mesas as $mesa)
            <div class="c" style='width: 5%; height: 5%;top:{{$mesa->y}}%;  left:{{$mesa->x}}%;
            {{--background-color:{{($mesa->estado == "Vacia") ? "green" : "red"}};'>--}}
            background-image:url({{($mesa->estado == "Vacia") ? "/mesaD.png" : "/mesaO.png"}});
            background-size: 100% 100%;
            font-size:20px;    display: flex;
            justify-content: center;
            align-items: center;'>

                {{$mesa->id}}
                {{--            <div class="c" style='top:{{$mesa->y}}%;  left:{{$mesa->x}}%;'>--}}
                {{--                <a href='{{ route("cuentas.crearModifCuenta",$mesa -> id) }}'>--}}
                {{--                    <img src='{{($mesa->estado == "Vacia") ? "/mesaD.png" : "/mesaO.png"}}' style='width: 100%; height: 100%;object-fit: contain;'>--}}
                {{--                </a>--}}
            </div>
        @endforeach
    </div>


        <input class='button' type='submit' name='crear' value='Guardar posicion mesas' onclick="guardarPosicionMesas();"/>
{{--    <form action='{{ route('mesas.store') }}' method='post'>--}}
{{--        @method('post')--}}
{{--        <input class='button' type='submit' name='crear' value='Guardar posicion mesas'/>--}}
{{--    </form>--}}
</x-zz.base>
