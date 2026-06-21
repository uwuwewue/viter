<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
</head>

<body class="bg-secondary text-white min-vh-100">
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm py-3">
        <div class="container-fluid px-4">
            
            <a href="/" class="navbar-brand text-white fw-bold">Viter</a>
            
            <div class="d-flex gap-2 ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item list-unstyled">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                     @endif

                        @if (Route::has('register'))
                            <li class="nav-item list-unstyled">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                         @endif
                    @else
                        <li class="nav-item dropdown list-unstyled">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                </form>
                            </div>
                        </li>
                 @endguest
            </div>
        </div>
    </nav>

    <main class="container d-flex min-vh-100 justify-content-center align-items-center">
        ZZZ
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>
</body>
</html>