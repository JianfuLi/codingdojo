<?php

class RomanGagaTest extends PHPUnit_Framework_TestCase
{

    public function testSay0_9()
    {
        $romanGaga = new RomanGaga();
        $this->assertEquals('I', $romanGaga->say(1));
        $this->assertEquals('II', $romanGaga->say(2));
        $this->assertEquals('III', $romanGaga->say(3));
        $this->assertEquals('IV', $romanGaga->say(4));
        $this->assertEquals('V', $romanGaga->say(5));
        $this->assertEquals('VI', $romanGaga->say(6));
        $this->assertEquals('VII', $romanGaga->say(7));
        $this->assertEquals('VIII', $romanGaga->say(8));
        $this->assertEquals('IX', $romanGaga->say(9));
    }

    public function testSay10_19()
    {
        $romanGaga = new RomanGaga();
        $this->assertEquals('XI', $romanGaga->say(11));
        $this->assertEquals('XXII', $romanGaga->say(22));
        $this->assertEquals('XXXIII', $romanGaga->say(33));
        $this->assertEquals('XLIV', $romanGaga->say(44));
        $this->assertEquals('LV', $romanGaga->say(55));
        $this->assertEquals('LXVI', $romanGaga->say(66));
        $this->assertEquals('LXXVII', $romanGaga->say(77));
        $this->assertEquals('LXXXVIII', $romanGaga->say(88));
        $this->assertEquals('XCIX', $romanGaga->say(99));

/*

        $this->assertEquals('XII', $romanGaga->say(12));
        $this->assertEquals('XIV', $romanGaga->say(14));
        $this->assertEquals('XV', $romanGaga->say(15));
        $this->assertEquals('XIX', $romanGaga->say(19));

        $this->assertEquals('XX', $romanGaga->say(20));
        $this->assertEquals('XXII', $romanGaga->say(22));
        $this->assertEquals('XXIV', $romanGaga->say(24));
        $this->assertEquals('XXV', $romanGaga->say(25));

        $this->assertEquals('XXIX', $romanGaga->say(29));

        $this->assertEquals('XXXIX', $romanGaga->say(39));*/

        /*$this->assertEquals('XLIX', $romanGaga->say(49));
        $this->assertEquals('L', $romanGaga->say(50));

        $this->assertEquals('LIX', $romanGaga->say(59));

        $this->assertEquals('LXIX', $romanGaga->say(69));

        $this->assertEquals('XCIX', $romanGaga->say(99));*/
    }
}
