<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function Calculate(Request $request) {

        //$firstNumber = $request->firstNumber;
        //$secondNumber = $request->secondNumber;
        // OR with:

        $firstNumber = $request->get('firstNumber');
        $secondNumber = $request->get('secondNumber');
        $action = $request->get('action');

        if($action == "divide")
            return view('calculate', ['totalValue' => $firstNumber / $secondNumber]);
        elseif ($action == "multiply")
            return view('calculate',['totalValue' => $firstNumber * $secondNumber]);
        elseif ($action == "plus")
            return view('calculate',['totalValue' => $firstNumber + $secondNumber]);
        elseif ($action == "minus")
            return view('calculate',['totalValue' => $firstNumber - $secondNumber]);
    }
}
