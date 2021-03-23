<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        return view("test");
    }

    public function calculate(Request $request){
        (int)$x = $request->numberOne;
        (int)$y = $request->numberTwo;
        $Action = $request->action;
        if ($Action == 'Addition') {
            return ($x + $y);
        }
        if ($Action == 'Subtraction') {
            return ($x - $y);
        }
        elseif ($Action == 'Multiplication') {
            return ($x * $y);
        }
        else {
            return ($x / $y);
        }
    }
}
