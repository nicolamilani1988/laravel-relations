@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <h2>{{$pilot->firstname}} {{$pilot->lastname}}</h2>
        <div>Birthday: {{$pilot->date_of_birth}}</div>
        <div>Nationality: {{$pilot->nationality}}</div>
        <h3>Driven cars:</h3>
        <ul class="car-list">
            @foreach ($pilot->cars as $car)
                <li>
                    <div><u>{{$car->name}} {{$car->model}}</u></div>
                    <div>Sponsor: {{$car->brand->name}}</div>
                </li>
            @endforeach
        </ul>
    </div> 
@endsection