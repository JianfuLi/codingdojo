<?php

/**
 *
 *
 * @version   1.0
 * @author    jianphu (me@ljf.me)
 * @create    2014/9/23 10:07
 * @copyright Copyright (c) 2014 (http://ljf.me)
 */
class NumberOffTest extends PHPUnit_Framework_TestCase
{
    public $numberOff;

    public function setUp()
    {
        $this->numberOff = new NumberOff(3, 5, 7);
    }

    public function testSayByNumbers_ShouldBe_Numbers()
    {
        $this->assertEquals('1', $this->numberOff->say(1));
        $this->assertEquals('67', $this->numberOff->say(67));
    }

    public function testSayByMultiple_ShouldBe_FizzOrBuzzOrWhizz()
    {
        $this->assertEquals('Fizz', $this->numberOff->say(3));
        $this->assertEquals('Buzz', $this->numberOff->say(5));
        $this->assertEquals('Whizz', $this->numberOff->say(7));
    }

    public function testSayByCommonMultiple_ShouldBe_ContainsValues()
    {
        $this->assertEquals('FizzBuzz', $this->numberOff->say(15));
        $this->assertEquals('FizzWhizz', $this->numberOff->say(21));
        $this->assertEquals('BuzzWhizz', $this->numberOff->say(70));
        $this->assertEquals('FizzBuzzWhizz', $this->numberOff->say(105));
    }

    public function testSayByContainsFirstNumber_ShouldBe_Fizz()
    {
        $this->assertEquals('Fizz', $this->numberOff->say(13));
    }
}