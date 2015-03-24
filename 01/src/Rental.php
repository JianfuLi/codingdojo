<?php
/**
 * Created by PhpStorm.
 * User: ljf
 * Date: 14-8-14
 * Time: 上午9:59
 */
/**
 * Class Rental
 *
 * 租赁
 */
class Rental
{
    private $_movie;
    private $_daysRented;

    function __construct(Movie $_movie, $_daysRented)
    {
        $this->_movie = $_movie;
        $this->_daysRented = $_daysRented;
    }

    /**
     * @return int
     */
    public function getDaysRented()
    {
        return $this->_daysRented;
    }

    /**
     * @return Movie
     */
    public function getMovie()
    {
        return $this->_movie;
    }

    public function getCharge()
    {
        return $this->getMovie()->getCharge($this->getDaysRented());
    }

    public function getFrequentRenterPoints()
    {
        $frequentRenterPoints = 1;
        if (($this->getMovie()->getPriceCode() == Movie::NEW_RELEASE)
            && ($this->getDaysRented() > 1)
        ) {
            $frequentRenterPoints = 2;
        }
        return $frequentRenterPoints;
    }
} 