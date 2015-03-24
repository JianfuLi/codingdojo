<?php
class RentalTest extends PHPUnit_Framework_TestCase
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
     * @return array
     */
    public function getFrequentRenterPointsProvider()
    {
        return array(
            array(Movie::REGULAR, 1, 1),
            array(Movie::REGULAR, 3, 1),
            array(Movie::NEW_RELEASE, 1, 1),
            array(Movie::NEW_RELEASE, 3, 2),
            array(Movie::CHILD_RENS, 1, 1),
            array(Movie::CHILD_RENS, 4, 1),
        );
    }

    protected function createRental($priceCode, $dayRented)
    {
        return new Rental(new Movie('', $priceCode), $dayRented);
    }

    /**
     * @param $priceCode
     * @param $dayRented
     * @param $expected
     * @dataProvider getChargeProvider
     */
    public function testGetCharge($priceCode, $dayRented, $expected)
    {
        //$rental = new Rental(new Movie('', $priceCode), $dayRented);
        $rental = $this->createRental($priceCode, $dayRented);
        $actual = $rental->getCharge();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @param $priceCode
     * @param $dayRented
     * @param $expected
     * @dataProvider getFrequentRenterPointsProvider
     */
    public function testFrequentRenterPoints($priceCode, $dayRented, $expected)
    {
        //$rental = new Rental(new Movie('', $priceCode), $dayRented);
        $rental = $this->createRental($priceCode, $dayRented);
        $actual = $rental->getFrequentRenterPoints();
        $this->assertEquals($expected, $actual);
    }
} 