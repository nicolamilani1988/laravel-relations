@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <h2>Create New Car</h2>
        <div>
            <form action="{{route('storeCar')}}" method="POST">
                @csrf
                @method('POST')
                <div class="input-form">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="input-form">
                    <label for="model">Model</label>
                    <input type="text" name="model" id="model" required>
                </div>
                <div class="input-form">
                    <label for="kW">kW</label>
                    <input type="number" name="kW" id="kW" required>
                </div>
                <div class="input-form">
                    <label for="brand_id">Choose Brand</label>
                    <select name="brand_id" id="brand_id" required>
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-form">
                    <label for="pilots_id[]">Pilots</label>
                    <select name="pilots_id[]" id="pilots_id[]" required multiple>
                        @foreach ($pilots as $pilot)
                            <option value="{{$pilot->id}}">{{$pilot->firstname}} {{$pilot->lastname}}</option>                            
                        @endforeach
                    </select>
                </div>
                <div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
