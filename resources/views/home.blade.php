@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-4 bg-primary text-light"><h4>{{ __('Witaj '.Auth::user()->name.'! Oto nasz szybkie menu:') }}</h4></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row text-xl-center">
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Zarezerwuj nową wizyte</h2>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('visitform')}}" class="btn btn-primary btn-md">Przejdź do formularza</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Przeglądaj historię rezerwacji</h2>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{url('#')}}" class="btn btn-primary btn-md">Zobacz historię</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Zmień swoje dane</h2>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('edit')}}" class="btn btn-primary btn-md">Edytuj profil</a>
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
