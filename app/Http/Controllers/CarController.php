<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {

        $cars = Car::all();

        // dump and die.   Ekrana cykaryar we yzyndaky komandalary isletmeyar
        return view('car', compact('cars'));

    }
}
