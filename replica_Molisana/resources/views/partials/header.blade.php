<header>
    <div class="header_wrapper">
        <div class="logo">
            <img src="{{asset('img/logo.png') }}" alt="Logo Molisana">
        </div>
        <nav>
            <ul>
                <li class='{{ (Request::route()->getName() == 'pagina-home' ) ? 'active' : '' }} '>
                    <a class='tags' href="{{ route('pagina-home') }}" > Home </a>
                </li>
                <li class='{{ (Request::route()->getName() == 'pagina-prodotti' ) ? 'active' : '' }} '>
                    <a class='tags' href="{{route('pagina-prodotti') }}" > Prodotti </a>
                </li>
                <li class='{{ (Request::route()->getName() == 'pagina-news' ) ? 'active' : '' }} '>
                    <a class='tags' href="{{route('pagina-news')}}" > News </a>
                </li>
            </ul>
        </nav>
    </div>
    @yield('header_content')
</header>