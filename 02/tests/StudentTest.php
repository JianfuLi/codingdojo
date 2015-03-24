<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/24
 * Time: 17:07
 */
class  StudentTest extends PHPUnit_Framework_TestCase
{
    public $student;

    public function setUp()
    {
        $this->student = new Student(3, 5, 7);
    }

    public function testSay_ShouldBe_Numbers()
    {
        $this->assertEquals('1', $this->student->say(1));
        $this->assertEquals('2', $this->student->say(2));
    }

    public function testSayMultiple_ShouldBe_JoinValues()
    {
        $this->assertEquals('FizzBuzz', $this->student->say(15));
        $this->assertEquals('FizzWhizz', $this->student->say(21));
        $this->assertEquals('BuzzWhizz', $this->student->say(70));
        $this->assertEquals('FizzBuzzWhizz', $this->student->say(105));
    }

    public function testSayContainsFirstValue_ShouldBe_Fizz()
    {
        $this->assertEquals('Fizz', $this->student->say(13));
    }

    public function testSaySpecial_ShouldBe_FizzOrBuzzOrWhizz()
    {
        $this->assertEquals('Fizz', $this->student->say(3));
        $this->assertEquals('Buzz', $this->student->say(5));
        $this->assertEquals('Whizz', $this->student->say(7));
    }
}