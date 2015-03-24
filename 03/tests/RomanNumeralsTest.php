<?php
/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/26
 * Time: 14:35
 */
class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{
    public function testLessThanTen()
    {
        $romanNnumerals = new RomanNumerals();
        $this->assertEquals('I', $romanNnumerals->convert0_9(1));
        $this->assertEquals('IV', $romanNnumerals->convert0_9(4));
        $this->assertEquals('V', $romanNnumerals->convert0_9(5));
        $this->assertEquals('VIII', $romanNnumerals->convert0_9(8));
        $this->assertEquals('IX', $romanNnumerals->convert0_9(9));
    }

    public function testLessThanOneHundred()
    {
        $romanNnumerals = new RomanNumerals();
        $this->assertEquals('XIX', $romanNnumerals->convert10_99(19));
        $this->assertEquals('XLV', $romanNnumerals->convert10_99(45));
        $this->assertEquals('L', $romanNnumerals->convert10_99(50));
        $this->assertEquals('LXXXVIII', $romanNnumerals->convert10_99(88));
        $this->assertEquals('XCV', $romanNnumerals->convert10_99(95));
    }
}