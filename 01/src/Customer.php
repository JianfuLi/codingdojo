<?php
/**
 * Class Customer
 *
 * 顾客类
 */
class Customer
{
    private $_name;
    private $_rentals = array();

    function __construct($_name)
    {
        $this->_name = $_name;
    }

    public function addRental(Rental $arg)
    {
        array_push($this->_rentals, $arg);
    }

    public function getName()
    {
        return $this->_name;
    }

    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $result = 'Rental Record for ' . $this->getName() . '\n';
        foreach ($this->_rentals as $rental) {
            //$thisAmount = $rental->getCharge();
            $frequentRenterPoints += $rental->getFrequentRenterPoints();
            $result .= '\t' . $rental->getMovie()->getTitle() . '\t' . $rental->getCharge() . '\n';
            $totalAmount += $rental->getCharge();
        }
        $result .= 'Amount owed is ' . $totalAmount . '\n';
        $result .= 'You earned ' . $frequentRenterPoints . ' frequent renter points';
        return $result;
    }
} 