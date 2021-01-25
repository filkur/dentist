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
                            <a href="{{ url('cennik') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">Cennik</a>
                        </li>
                        <li class="nav-item" style="margin-top: 15px;">
                            <a href="{{ url('kontakt') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">kontakt</a>
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

<!-- Page Content -->
<div class="container">
    <header class="mt-4 mb-4">
        <h2>Cennik za nasze usługi:</h2>
    </header>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nazwa</th>
            <th scope="col">Cena [zł]</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Badanie stomatologiczne</th>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">Konsultacja/plan leczenia</th>
            <td>100</td>
        </tr>
        <tr>
            <th scope="row">Wypełnienie w zębie mlecznym</th>
            <td>150</td>
        </tr>
        <tr>
            <th scope="row">Skaling + piaskowanie + fluoryzacja</th>
            <td>Od 250</td>
        </tr>
        <tr>
            <th scope="row">Korona porcelanowa na podbudowie metalowej</th>
            <td>800</td>
        </tr>
        <tr>
            <th scope="row">Proteza szkieletowa</th>
            <td>1800</td>
        </tr>
        <tr>
            <th scope="row">Wybielanie zębów nakładkowe</th>
            <td>1100</td>
        </tr>
        <tr>
            <th scope="row">Wybielanie zębów lampą Beyond</th>
            <td>1200</td>
        </tr>
        <tr>
            <th scope="row">Usunięcie złamanego narzędzia</th>
            <td>400</td>
        </tr>
        <tr>
            <th scope="row">Ekstrakcja zęba</th>
            <td>200</td>
        </tr>
        <tr>
            <th scope="row">Leczenie zęba (wiercenie)</th>
            <td>160</td>
        </tr>
        <tr>
            <th scope="row">Leczenie kanałowe</th>
            <td>500</td>
        </tr>
        <tr>
            <th scope="row">Czyszczenie kamienia</th>
            <td>100</td>
        </tr>
        </tbody>
    </table>
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
