<?php

use App\RomanNumerals;

include_once('app/RomanNumerals.php');

class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{

    public function testTheNumberOneShouldReturnI()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(1);
        $this->assertTrue($romanNumeral == 'I');
    }

    public function testTheNumberThreeShouldReturnIII()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(3);
        $this->assertTrue($romanNumeral == 'III');
    }

    public function testTheNumberFourShouldReturnIV()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(4);
        $this->assertTrue($romanNumeral == 'IV');
    }

    public function testTheNumberFiveShouldReturnV()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(5);
        $this->assertTrue($romanNumeral == 'V');
    }

    public function testTheNumberSixShouldReturnVI()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(6);
        $this->assertTrue($romanNumeral == 'VI');
    }

    public function testTheNumberNineShouldReturnIX()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(9);
        $this->assertTrue($romanNumeral == 'IX');
    }

    public function testTheNumberTenShouldReturnX()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(10);
        $this->assertTrue($romanNumeral == 'X');
    }

    public function testTheNumberFortyNineShouldReturnIL()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(49);
        $this->assertTrue($romanNumeral == 'IL');
    }

    public function testTheNumberFiftyShouldReturnL()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(50);
        $this->assertTrue($romanNumeral == 'L');
    }

    public function testTheNumberNinetyNineShouldReturnIC()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(99);
        $this->assertTrue($romanNumeral == 'IC');
    }

    public function testTheNumberOneHundredShouldReturnC()
    {
        $romanNumeral = RomanNumerals::ConvertToRoman(100);
        $this->assertTrue($romanNumeral == 'C');
    }

}
