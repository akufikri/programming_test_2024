<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    // syntax 9 digits
    public function processNumber(Request $request)
    {
        $input = $request->input('number');
        $processedNumber = substr($input, 0, 1) . substr($input, 3, 1) . substr($input, 5, 1) . substr($input, 8, 1);
        $processedNumber = intval($processedNumber);
        $isPrime = $this->isPrimeNumber($processedNumber);
        return view('result', [
            'input' => $input,
            'processedNumber' => $processedNumber,
            'isPrime' => $isPrime,
        ]);
    }

    // syntax 5 digits
    public function processNumberToLarge(Request $request)
    {
        $input = $request->input('number');

        $request->validate([
            'number' => 'required|digits:5|numeric',
        ]);

        $digitsArray = str_split($input);
        sort($digitsArray);

        $sortedNumber = implode('', array_slice($digitsArray, 0, 5));

        return view('resultToLarge', [
            'input' => $input,
            'sortedNumber' => $sortedNumber,
        ]);
    }

    // melooping number
    private function isPrimeNumber($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
