@extends('layouts.app')

@section('content')
    <div class="container">





        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-4 bg-primary text-light"><h4>{{ __('Hej '.Auth::user()->name.'! Co chcesz zrobić?') }}</h4></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="row">
                                <div id="firstContent">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{url('/img/slider1.jpg')}}" class="d-block w-100" alt="image1" style="border-radius: 10px;">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h2>Zarezerwuj nową wizyte</h2>
                                                    <p>Wypróbuj naszą nową funkcjonalnośc i zarezerwuj wizytę za jednym kliknięciem!</p>
                                                    <a href="{{route('visitform')}}" class="btn btn-warning btn-lg">Przejdź do formularza</a>
                                                </div>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{url('/img/slider2.jpg')}}" class="d-block w-100" alt="image2" style="border-radius: 10px;">
                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                    <h2>Zobacz historie rezerwacji</h2>
                                                    <p>Nie pamiętasz date wizyty? Żaden problem! Wciśnij przycisk i zobacz kiedy masz wizytę</p>
                                                    <a href="{{route('visitform')}}" class="btn btn-warning btn-lg">Przejdź do historii</a>
                                                </div>

                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{url('/img/slider3.jpg')}}" class="d-block w-100" alt="image3" style="border-radius: 10px;">
                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                    <h2>Edytuj profil</h2>
                                                    <p>Nie podoba Ci się Twój nick? a może zmieniłeś e-mail? Żaden kłopot, zmień dane teraz!</p>
                                                    <a href="{{route('edit')}}" class="btn btn-warning btn-lg">Przejdź do edycji profilu</a>
                                                </div>

                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
