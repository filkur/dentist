@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <h3>Zarezerwowane wizyty:</h3>
                <hr>
                <div class="row mt-4 ml-1" >
                    <div class="col"><h5>#Id<br> rezerwacji:</h5></div>
                    <div class="col"><h5>#Id <br> klienta:</h5></div>
                    <div class="col"><h5>Specjalista:</h5></div>
                    <div class="col"><h5>Typ wizyty:</h5></div>
                    <div class="col"><h5>Data:</h5></div>
                    <div class="col"><h5>Godzina:</h5></div>
                </div>
            </div>

            <div class="card-body">
                @if($visits != null)
                    @foreach($visits as $ticket)
                        <div class="row mt-4 border-bottom pl-4">
                            @foreach($ticket as $item => $key)
                                <div class="col"><h4>{{$key}}</h4></div>
                            @endforeach
                        </div>
                        
                    @endforeach
                @else
                    Nie zakupiono jeszcze żadnego biletu
                @endif
            </div>
        </div>
    </div>

@endsection
