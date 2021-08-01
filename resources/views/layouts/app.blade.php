<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav>
        <ul class="myNavbar">
            @guest
            @if (Route::has('login'))
            <li class="myitem">
                <a class="my-link btn logBTNA" href="{{ route('login') }}">{{ __('چوونەزوورەوە') }}</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li class="myitem">
                <a class="my-link btn logBTNA" href="{{ route('register') }}">{{ __('تۆماربوون') }}</a>
            </li>
            @endif
            @else
           
            <li class="myitem">
                <a class="logout my-link btn logBTNA" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    {{ __('چوونەدەرەوە') }}
                </a>
            </li>
            <li class="myitem">
                <a id="" class="my-link btn logBTNA disabled" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    
            @endguest
        </ul>
       

        <div class="Mybrand">
            <figure>
                <img class="KurdmadLogo" src="assets\img\FInal logo madddgdf.png" alt="kurdmad Logo">
            </figure>
        </div>


    </nav>
    <main>
        @yield('content')
    </main>


    <footer>
        <h5>درووستکراوە لەلایەن: <a href="">نشوان دڵشاد</a></h5>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
