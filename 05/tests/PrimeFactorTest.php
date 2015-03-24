<?php
require '../src/PrimeFactor.php';

class PrimeFactorTest extends PHPUnit_Framework_TestCase
{
    public function testFactorize()
    {
        $primeFactor = new PrimeFactor();
        $this->assertEquals(array(2), $primeFactor->factorize(2));
        $this->assertEquals(array(3), $primeFactor->factorize(3));
        $this->assertEquals(array(2, 2), $primeFactor->factorize(4));
        $this->assertEquals(array(5), $primeFactor->factorize(5));
        $this->assertEquals(array(2, 3), $primeFactor->factorize(6));
        $this->assertEquals(array(7), $primeFactor->factorize(7));
        $this->assertEquals(array(2, 2, 2), $primeFactor->factorize(8));
        $this->assertEquals(array(3, 3), $primeFactor->factorize(9));

        $this->assertEquals(array(2, 2, 2, 3), $primeFactor->factorize(24));
    }
}