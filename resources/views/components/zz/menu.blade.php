<nav>
    <a href='{{ route('mesas.index') }}'>Mesas</a>
    <a href='{{ route('categorias.index') }}'>Categor&iacute;as</a>
    <a href='{{ route('productos.index') }}'>Productos</a>
    <div class="animation start-home"></div>

</nav>
@if(\Illuminate\Support\Facades\Auth::check())
    <p class="animation start-home">Bienevenido usuario: {{
    Auth::user()->name}}
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
    </p>
@endif
<hr />
