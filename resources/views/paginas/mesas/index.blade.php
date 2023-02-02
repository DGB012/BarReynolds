<!--suppress CssUnknownTarget -->

<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Listado de Mesas</x-slot:tituloVisible>

    <div class='a'>
        @foreach($mesas as $mesa)
            <div class="c" style='top:{{$mesa->y}}%;  left:{{$mesa->x}}%;'>
                <a href='{{ route("cuentas.crearModifCuenta",$mesa -> id) }}'>
                    <img src='{{($mesa->estado == "Vacia") ? "/mesaD.png" : "/mesaO.png"}}'>
                </a>
            </div>
        @endforeach
    </div>


    <form action='{{ route('mesas.store') }}' method='post'>
        @method('post')
        <input class='button' type='submit' name='crear' value='Crear mesa'/>
    </form>

</x-zz.base>
