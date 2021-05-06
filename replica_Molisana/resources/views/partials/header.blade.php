<header>
    <div class="header_wrapper">
        <div class="logo">
            <img src="{{asset('img/logo.png') }}" alt="Logo Molisana">
        </div>
        <nav>
            <ul>
                <li>
                    <a href="{{asset('/')}}"> Home </a>
                </li>
                <li>
                    <a href="{{asset('/prodotti')}}"> Prodotti </a>
                </li>
                <li>
                    <a href="{{asset('/news')}}"> News </a>
                </li>
            </ul>
        </nav>
    </div>
    @yield('header_content')
</header>