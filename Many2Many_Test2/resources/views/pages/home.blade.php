@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <h1>CAR'S LIST</h1>
        <ul class="car-list">
            @foreach ($cars as $car)
                <li>
                    <h2>Car #{{$car->id}}: <u>{{$car->name}}</u> {{$car->model}} ({{$car->kW}}kW)</h2>
                    <div><strong>Sponsor:</strong></div>
                    <div>{{$car->brand->name}}</div>
                    <div><strong>Pilots:</strong></div>
                    <ul>
                        @foreach ($car->pilots as $pilot)
                            <li><a href="{{route('pilot',$pilot->id)}}">{{$pilot->firstname}} {{$pilot->lastname}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div> 
@endsection



