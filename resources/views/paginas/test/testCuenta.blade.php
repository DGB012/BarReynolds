<x-zz.base>

    <x-slot:tituloHead>Mesas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mesas</x-slot:tituloVisible>

    <br><br>

    <button><a href='{{ route('cuentas.crearModifCuenta',[1]) }}'>Mesa 1</a></button>
    <button><a href='{{ route('cuentas.crearModifCuenta',[2]) }}'>Mesa 2</a></button>
    <button><a href='{{ route('cuentas.crearModifCuenta',[3]) }}'>Mesa 3</a></button>
{{--    <button><a href='{{ route('mesas.addProducto',[$mesa]) }}'>Mesa 1</a></button>--}}
    <br><br>


</x-zz.base>
