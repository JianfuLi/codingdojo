<?php
/**
 * Created by PhpStorm.
 * User: ljf
 * Date: 14-8-22
 * Time: 下午4:03
 */

class MovieTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return array
     */
    public function getChargeProvider()
    {
        return array(
            array(Movie::REGULAR, 1, 2),
            array(Movie::REGULAR, 3, 3.5),
            array(Movie::NEW_RELEASE, 1, 3),
            array(Movie::NEW_RELEASE, 3, 9),
            array(Movie::CHILD_RENS, 1, 1.5),
            array(Movie::CHILD_RENS, 4, 3),
        );
    }

    /**
     * @param $priceCode
     * @param $daysRented
     * @param $expected
     * @dataProvider getChargeProvider
     */
    public function testGetCharge($priceCode, $daysRented, $expected)
    {
        $movie = new Movie('', $priceCode);
        $actual = $movie->getCharge($daysRented);
        $this->assertEquals($expected, $actual);
    }
} 