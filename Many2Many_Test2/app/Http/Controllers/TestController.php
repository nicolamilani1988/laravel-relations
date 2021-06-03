<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Pilot;
use App\Brand;


class TestController extends Controller
{
    public function home(){

        $cars=Car::all();
        return view('pages.home',compact('cars'));
    }

    public function pilot($id){

        $pilot=Pilot::findOrFail($id);
        return view('pages.pilot',compact('pilot'));
    }

    public function createCar(){

        $brands=Brand::all();
        return view('pages.createCar',compact('brands'));
    }

    public function storeCar(Request $request){

        $validate=$request->validate([
            'name'=>'required|min:3',
            'model'=>'required|min:3',
            'kW'=>'required|integer|min:100|max:1000',
        ]);

        $brand = Brand::findOrFail($request -> get('brand_id'));
        $car=Car::make($validate);
        $car->brand()->associate($brand);
        $car->save();

        return redirect() -> route('home');
    }
}
