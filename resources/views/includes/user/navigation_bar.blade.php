<nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('user.login'))

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('user.register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::guard('web')->user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
