@extends('layouts.app')

@section('content')
@if(Auth::check())
    <div class="container">
        <form action='/potwierdz' method='post'>
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-4 bg-primary text-light"><h4>{{ __('Zarezerwuj wizytę:') }}</h4></div><div class="card-body">
                            <div class="row">
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="specialist" class="ml-4">Specjalista: </label>
                                    <select id="specialist" name="specialist" class="form-control">
                                        <option value="Kowalski">Kowalski Jan</option>
                                        <option value="Nowak">Nowak Agnieszka</option>
                                        <option value="Wisniewski">Wisniewski Przemyslaw</option>
                                        <option value="Kajetanowicz">Kajetanowicz Pawel</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="type" class="ml-4">Typ wizyty</label>
                                    <select id="type" name="type" class="form-control">
                                        <option value="Konsultacja">Konsultacja</option>
                                        <option value="Specjalistyczna">Specjalistyczna</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="visitDate" class="mt-1">Dzień wizyty:</label> <br/>
                                    <input type="date" id="visitDate" name="visitDate"
                                           value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" class="w-100 h-50">
                                </div>
                                <div class="col-md-3 mb-4 mt-1">
                                    <label for="visitHour" class="ml-4">Godzina wizyty:</label>
                                    <select id="visitHour" name="visitHour" class="form-control">
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                    </select>
                                </div>
                                <div class="col-12 ">
                                    <button type="submit" class="btn btn-primary btn-md" name="Rezerwuj">Rezerwuj</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@else
    <div class="container">
        <div class="card-header">
            Zaloguj się aby skorzystać z tej funkcji
        </div>
    </div>
@endif
@endsection
