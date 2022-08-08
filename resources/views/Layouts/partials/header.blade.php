<header>
    <h1>Mary's Bazar</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a> </li>
            <li><a href="{{route('productos.index')}}" class="{{request()->routeIs('productos.*') ? 'active' : ''}}">Productos</a></li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
        </ul>
    </nav>
</header>