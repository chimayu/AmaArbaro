<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>  


    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

    @include('._script')

    <title>@yield('title') | AmaArbaro</title>
    </head>
    <body>
        {{-- toast --}}
        <script>
            @if (session('success_message'))
                $(function () {
                        toastr.success('{{ session('success_message') }}');
                });
            @endif

            @if (session('error_message'))
                $(function () {
                        toastr.error('{{ session('error_message') }}');
                });
            @endif
        </script>

        <header>
            <div class="header">
            <!--ヘッダー左側部分-->
            <div class="header-left">
                <a href="{{ route('welcome') }}">     
                    <div class="name"><img src="{{ asset('/img/logo.png')}}" class="ticon mr-4">Ama Arbaro</div>
                </a>
               <div class="zero"><a href="{{ route('news') }}" class="link">Make donations<br>with ZERO price</a></div>
            </div>
            <!--ヘッダー右側部分-->
            <div class="header-right">
                <a href="http://twitter.com/share?.php?u=https://amaarbaro.herokuapp.com" class="link"><img src="{{ asset('/img/logo_twitter.png')}}" id="icon" class="twitter_button" ontouchstart=""></a>
                <a href="http://www.facebook.com/share.php?u=https://amaarbaro.herokuapp.com" class="link"><img src="{{ asset('/img/logo_facebook.png')}}" id="icon" class="facebook_button" ontouchstart=""></a>
                <a href="{{ route('contact') }}" class="link"><div class="about">About us</div></a>
                
                <div>
            
                        @if (Route::has('login'))
                            <div class="menu">
                                @auth
                                    <a href="{{ route('home') }}" class="link">My page</a>
                                    <a href="{{ route('user.logout') }}" class="link mr-3">Logout</a>
                                @else
                                    <a href="{{ route('login') }}" class="link">Login</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="link mr-3">Sign up</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div> 
        </header>
        <main>
            @yield('content')
        </main>

        <footer class="mb-4 mt-5">
            <div class="footer">
                <a id="foot" href="{{ route('terms') }}" class="link">Terms of use</a>
                <a id="foot" href="{{ route('privacy') }}" class="link">Privacy policy</a>
                <p id="foot" class="ama ml-2">&copy; 2019  Ama Arbaro</p>
            </div> 
        </footer> 
    </body>
</html>