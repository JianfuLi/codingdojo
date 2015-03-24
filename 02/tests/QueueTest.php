<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/24
 * Time: 17:31
 */
class QueueTest extends PHPUnit_Framework_TestCase
{
    public function testNumberOff()
    {
        $queue = new Queue(2);
        $this->assertEquals("1\n2", $queue->numberOff(3, 5, 7));
    }

    public function testNumberOffByCount7_ShouldBe_FizzOrBuzzOrFizz()
    {
        $queue = new Queue(7);
        $this->assertEquals(
            implode(
                "\n",
                array(1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 'Whizz')
            ),
            $queue->numberOff(3, 5, 7)
        );
    }
}