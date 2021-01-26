@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-light">
                <h3>Zarezerwowane wizyty:</h3>
                <hr>
                <div class="row mt-4 ml-1" >
                    <div class="col ml-0"><h5>#Id<br> rezerwacji:</h5></div>
                    <div class="col ml-4"><h5>#Id <br> klienta:</h5></div>
                    <div class="col ml-5"><h5>Specjalista:</h5></div>
                    <div class="col ml-5"><h5>Typ wizyty:</h5></div>
                    <div class="col ml-5"><h5>Data:</h5></div>
                    <div class="col ml-5"><h5>Godzina:</h5></div>
                    <div class="col ml-5"><h5>-</h5></div>
                </div>
            </div>

            <div class="card-body">
                    @foreach($visits as $visit)
                        <div class="row mt-4 border-bottom pl-4">
                            @foreach($visit as $item => $key)
                                <div class="col"><h4>{{$key}}</h4></div>
                            @endforeach
                                <form action="/historia/{{\Illuminate\Support\Facades\Auth::id()}}/{{$visit -> id}}" method="post">
                                    @csrf
                                    <a href="{{route('historyDes', ['userId'=>Auth::id(),'visitId'=>$visit -> id])}}" class="btn btn-warning btn-sm" >Anuluj</a>
                                </form>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection
