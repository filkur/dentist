<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>dental.pl</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
                <div class="container">
                    @if (Auth::check())
                        <a class="navbar-brand" href="{{url('home')}}">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" >
                        </a>
                    @else
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" >
                        </a>
                    @endif
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->

                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a href="{{ url('home') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">przejdź do serwisu</a>
                                    </li>
                                @else
                                    <li class="nav-item" style="margin-top: 15px;">
                                        <a href="{{ route('price') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">Cennik</a>
                                    </li>
                                    <li class="nav-item" style="margin-top: 15px;">
                                        <a href="{{ route('contact') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">Kontakt</a>
                                    </li>
                                    <li class="nav-item mr-3">
                                        <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Zaloguj</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="btn btn-secondary btn-lg" href="{{ route('register') }}">Rejestruj</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
<!-- Header -->
<header class="bg-primary py-5 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h1 class="display-4 text-white mt-5 mb-2">Gabinet dentystyczny DENTAL</h1>
                <p class="lead mb-7 text-white-10 pt-4">Witamy na stronie internetowej naszego gabinetu. U nas będziesz mógł zarejestrować się na wizytę online za jednym kliknięciem, bez długich kolejek!</p>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row pt-4">
        <div class="col-md-8 mb-5">
            <h2>Co oferujemy?</h2>
            <hr>
            <p style="margin-top: 30px;">Jesteśmy doświadczonymi dentystami z bardzo dobrą renomą oraz opinią na rynku. U nas będziesz mógł skorzystać z usług stomatologicznych, chirurgii stomatologicznej, protetyki oraz profilaktyki dla dzieci, młodzieży oraz dorosłych.</p>
            <p style="margin-top: 30px;">Razem ze startem naszej strony internetowej która jest naszą świetną wizytówką, wprowadzamy możliwość posiadania konta społecznościowego. Logując się będziesz mógł bez kolejek rejestrować się na dowolną wizytę a także posiadać w jednym miejscu zarezerwowane wizyty.</p>
            <p style="margin-top: 50px;">Nie czekaj! kliknij poniżej aby się zarejestrować!</p>
            <a class="btn btn-warning btn-lg" href="{{ route('register') }}">Formularz rejestracji &raquo;</a>
        </div>
        <div class="col-md-4 mb-5 text-xl-center">
            <h2>Godziny otwarcia</h2>
            <hr>
            <p style="margin-top: 60px;">Poniedziałek 10:00 - 18:00</p>
            <p>Wtorek 10:00 - 18:00</p>
            <p>Środa 10:00 - 18:00</p>
            <p>Czwartek 10:00 - 18:00</p>
            <p>Piątek 10:00 - 18:00</p>
            <p>Sobota 10:00 - 18:00</p>
            <p>Niedziela 10:00 - 18:00</p>
        </div>
    </div>
    <!-- /.row -->

    <div class="row pt-4">
        <header>
            <div class="col-md-12 mb-5">
                <h2>Co nas wyróżnia?</h2>
                <hr>
            </div>
        </header>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/team.jpg') }}" alt="team">
                <div class="card-body">
                    <h4 class="card-title">WYKWALIFIKOWANI SPECJALIŚCI</h4>
                    <p class="card-text">Zatrudniamy najlepszych specjalistów, dzięki którym jakość naszych usług jest na wyższym poziomie</div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/sprzet.jpg') }}" alt="sprzet">
                <div class="card-body">
                    <h4 class="card-title">NOWOCZESNY SPRZĘT</h4>
                    <p class="card-text">Używamy najwyższej klasy sprzętu medycznego</div>

            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/atmosfera.jpg') }}" alt="atmosfera">
                <div class="card-body">
                    <h4 class="card-title">MIŁA ATMOSFERA</h4>
                    <p class="card-text">Zadbamy o to, aby każdy Pacjent czuł się u nas swobodnie i komfortowo</div>

            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Dental&copy; 2021 - nowoczesny gabinet stomatologiczny  </p>
    </div>
    <!-- /.container -->
</footer>

</body>
</html>

