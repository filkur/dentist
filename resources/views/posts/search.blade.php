@extends('layouts.app')

@section('content')

    @if(empty($visit))
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-light"><h3>Dokonano rezerwacji wizyty.</h3></div>
                <div class="card-body">
                    <p>Kliknij w przycisk poniżej i sprawdź w swojej historii wizyt czy nowa została dodana!</p>
                    <a href="{{route('history', ['userId' => \Illuminate\Support\Facades\Auth::id()])}}" class="btn btn-warning btn-md">Przejdź do historii</a>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="card">
                <div class="card-header bg-primary text-light"><h3>Przepraszamy, wybrany termin jest zajęty</h3></div>
                <div class="card-body">
                    <p>Kliknij przycisk poniżej aby wrócić do formularza i wybrać inny termin</p>
                    <a href="{{route('visitform')}}" class="btn btn-warning btn-md">Powrót</a>
                </div>
            </div>
        </div>
    @endif

@endsection
