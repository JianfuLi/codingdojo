<?php
/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 14-9-19
 * Time: 下午2:36
 */
class GameTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function getNumProvider()
    {
        return array(
            array(1, 1),
            array(3, 'Fizz'),
            array(5, 'Buzz'),
            array(7, 'Whizz'),
            array(13, 'Fizz'),
            array(35, 'Fizz'),
            array(36, 'Fizz'),
            array(57, 'Fizz'),
            array(70, 'BuzzWhizz'),



        );
    }

    /**
     * @param $num
     * @param $expected
     * @dataProvider getNumProvider
     */
    public function testRun($num, $expected)
    {
        $game = new Game('3');
        $actual = $game->run($num);
        $this->assertEquals($expected, $actual);
    }

}