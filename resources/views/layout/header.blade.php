<header>
    <nav class="navbar navbar-expand navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0); backdrop-filter: blur(5px);">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/logo2.png') }}" alt="" width="160px";></a>
            <div class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="{{route('homepage')}}">{{ __('header.home') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="font-weight: bold;" href="{{ route('homepage') }}#about-us">{{ __('header.aboutus') }}</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="{{route('articles')}}">{{ __('header.articles') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="/donate">{{ __('header.donate') }}</a>
                    </li>
                    
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="{{route('login')}}">{{ __('header.login') }}</a>
                    </li>    

                    @else
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="/profile">{{ __('header.profiles') }}</a>
                    </li>
                    @endguest

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="font-weight: bold;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('header.language') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('change.language', 'id') }}">{{ __('header.id') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('change.language', 'en') }}">{{ __('header.en') }}</a></li>
                    </ul>
                     </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



