<style>
    @if(Auth::user()->rol == 'ADM')
    nav {
        margin: 20px 40% 0;
        width: 380px;
    }
    @endif
</style>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-1' style='top: 1vh'>
            <img src='/img/icono.png' style='height: 70px;'/>
        </div>
        <div class='col-8'>
            <nav>
                <a href='{{ route('mesas.index') }}'>Mesas</a>
                @if(Auth::user()->rol == 'ADM')
                    <a href='{{ route('categorias.index') }}'>Categor&iacute;as</a>
                @endif
                <a href='{{ route('productos.index') }}'>Productos</a>
                <div class="animation start-home"></div>
            </nav>
        </div>
        <div class='col-3' style='top: 1vh'>
            <div style='margin-left: 35%; margin-top: 2%'>
                <div class='user'>Usuario:<br>{{Auth::user()->name}}</div>
                <div class='vertical-line'></div>
                <form method="POST" action="{{ route('logout') }}">
                    <button type="submit" class='botonTransparente'>
                        <svg class='logOut' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<hr/>
