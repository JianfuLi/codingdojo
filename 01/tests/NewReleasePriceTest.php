<?php



class NewReleasePriceTest extends PHPUnit_Framework_TestCase{

    /**
     * @return array
     */
    public function getAmountProvider()
    {
        return array(
           /* array(Movie::REGULAR, 1, 1),
            array(Movie::REGULAR, 3, 1),
            array(Movie::NEW_RELEASE, 1, 1),
            array(Movie::NEW_RELEASE, 3, 2),
            array(Movie::CHILD_RENS, 1, 1),
            array(Movie::CHILD_RENS, 4, 1),*/
            array(1, 3),
            array(3, 9),
        );
    }

    /**
     * @param $dayRented
     * @param $expected
     * @dataProvider getAmountProvider
     */
    public function testGetAmount($dayRented, $expected)
    {
        //$rental = new Rental(new Movie('', $priceCode), $dayRented);
        $price = new NewReleasePrice();
        $actual = $price->getAmount($dayRented);
        $this->assertEquals($expected, $actual);
    }
} 