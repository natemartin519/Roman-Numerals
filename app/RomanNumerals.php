<?php namespace App;


class RomanNumerals
{

    public static function ConvertToRoman($numberToConvert)
    {
        $romanNumeral = '';

        for ($currentNumber = $numberToConvert; $currentNumber > 0;) {

            if ($currentNumber >= 100) {
                $romanNumeral .= 'C';
                $currentNumber -= 100;
            } elseif ($currentNumber >= 99) {
                $romanNumeral .= 'IC';
                $currentNumber -= 99;
            } elseif ($currentNumber >= 50) {
                $romanNumeral .= 'L';
                $currentNumber -= 50;
            } elseif ($currentNumber >= 49) {
                $romanNumeral .= 'IL';
                $currentNumber -= 49;
            } elseif ($currentNumber >= 10) {
                $romanNumeral .= 'X';
                $currentNumber -= 10;
            } elseif ($currentNumber >= 9) {
                $romanNumeral .= 'IX';
                $currentNumber -= 9;
            } elseif ($currentNumber >= 5) {
                $romanNumeral .= 'V';
                $currentNumber -= 5;
            } elseif ($currentNumber >= 4) {
                $romanNumeral .= 'IV';
                $currentNumber -= 4;
            } else {
                $romanNumeral .= 'I';
                $currentNumber -= 1;
            }
        }

        return $romanNumeral;
    }
}