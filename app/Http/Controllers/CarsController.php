<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    //
    public function index() 
    {
        $cars = \App\Car::all();
        
        return view('cars/cars', compact('cars'));
    }

    public function show(Request $request, $id) 
    {
        $car = Car::findOrFail($id);
        
        return view('cars/show', compact('car'));
    }

}