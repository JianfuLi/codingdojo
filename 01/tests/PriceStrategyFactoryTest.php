<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-8-29
 * Time: 下午3:36.
 */

class PriceStrategyFactoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @return array
     */
    public function createPriceStrategyProvider()
    {
        return array(
            array(new Movie('', Movie::REGULAR), 1, 2),
            array(new Movie('', Movie::REGULAR), 3, 3.5),
            array(new Movie('', Movie::NEW_RELEASE), 1, 3),
            array(new Movie('', Movie::NEW_RELEASE), 3, 9),
            array(new Movie('', Movie::CHILD_RENS), 1, 1.5),
            array(new Movie('', Movie::CHILD_RENS), 4, 3),
        );
    }

    /**
     * @param Movie $movie
     * @param $dayRented
     * @param $expected
     * @dataProvider createPriceStrategyProvider
     */
    public function testCreatePriceStrategy(Movie $movie, $dayRented, $expected)
    {
        $price = PriceStrategyFactory::createPriceStrategy($movie);
        $actual = $price->getAmount($dayRented);
        $this->assertEquals($expected, $actual);
    }

}