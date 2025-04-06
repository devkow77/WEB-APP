<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TemperatureController extends Controller
{
    public function ctf(?float $c = null){
        // dd($c);
        // dump($c);

        if(!$c && $c != 0) return 'Nie podano wartosci';

        $fahrenheit = ($c * (9/5)) + 32;
        return $fahrenheit;
    }
}
