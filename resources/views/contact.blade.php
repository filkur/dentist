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
                            <a href="{{ url('kontakt') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">Kontakt</a>
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

<!-- Main page -->
        <div class="container">
            <!-- Header -->
            <header class="mt-4">
                <h4>Zapraszamy do kontaktu telefonicznego:</h4>
            </header>
            <div class="row mt-5">
                <div class="col-4">
                    <section>
                        <article style="margin-left: 25px">
                            <header>
                                <h5>Rejestracja #1</h5>
                            </header>
                            <p>Monika</p>
                            <p>Kowalska</p>
                            <p>Tel: 111-222-333</p>
                            <p>Email: rejestracja1@dental.com</p>
                        </article>
                    </section>
                </div>
                <div class="col-4">
                    <section>
                        <article style="margin-left: 25px">
                            <header>
                                <h5>Rejestracja #2</h5>
                            </header>
                            <p>Andrzej</p>
                            <p>Nowak</p>
                            <p>Tel: 123-456-789</p>
                            <p>Email: rejestracja2@dental.com</p>
                        </article>
                    </section>
                </div>
                <div class="col-4">
                    <section>
                        <article style="margin-left: 25px">
                            <header>
                                <h5>Rejestracja #3</h5>
                            </header>
                            <p>Angelika</p>
                            <p>Kolonowicz</p>
                            <p>Tel: 333-222-111</p>
                            <p>Email: rejestracja3@dental.com</p>
                        </article>
                    </section>
                </div>

            </div>
            <div class ="row">
                <section>
                    <header>
                        <h4>Masz pytanie? napisz do nas!</h4>
                    </header>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="well well-sm">
                                    <form class="form-horizontal" action="/kontakt" method="post">
                                        @csrf
                                        <fieldset>

                                            <!-- Name input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Imię:</label>
                                                <div class="col-md-9">
                                                    <input id="name" name="name" type="text" placeholder="Twoje imię" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Email input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="email">E-mail:</label>
                                                <div class="col-md-9">
                                                    <input id="email" name="email" type="text" placeholder="Wpisz e-mail" class="form-control">
                                                </div>
                                            </div>

                                            <!-- Message body -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="message">Zostaw wiadomość</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="message" name="message" placeholder="Zostaw swoją wiadomość tutaj..." rows="5"></textarea>
                                                </div>
                                            </div>

                                            <!-- Form actions -->
                                            <div class="form-group">
                                                <div class="col-md-12 text-right">
                                                    <button type="submit" class="btn btn-warning btn-lg">Wyślij</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="row mt-4 mb-4">
                <header><h2>Adres przychodni:</h2></header>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.0365753255514!2d22.546644251409525!3d51.236821279491394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47225770b90ed75f%3A0x1b6d4cc1142112fa!2sWydzia%C5%82%20Elektrotechniki%20i%20Informatyki%20Politechniki%20Lubelskiej!5e0!3m2!1sen!2spl!4v1609081953767!5m2!1sen!2spl" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Dental&copy; 2021 - nowoczesny gabinet stomatologiczny  </p>
    </div>
    <!-- /.container -->
</footer>

</body>
</html>

