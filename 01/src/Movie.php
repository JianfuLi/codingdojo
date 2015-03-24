<?php
/**
 * Class Movie
 *
 * 影片类
 */
class Movie
{
    const CHILD_RENS = 2;
    const REGULAR = 0;
    const NEW_RELEASE = 1;

    /**
     * @var string
     */
    private $_title;

    /**
     * @var int
     */
    private $_priceCode;

    /**
     * @var IPrice
     */
    private $_price;

    function __construct($_title, $_priceCode)
    {
        $this->_title = $_title;
        $this->_priceCode = $_priceCode;
        $this->setPrice($this->createPriceStrategy());
    }

    protected function createPriceStrategy()
    {
        return PriceStrategyFactory::createPriceStrategy($this);
    }

    /**
     * @return int
     */
    public function getPriceCode()
    {
        return $this->_priceCode;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    public function getCharge($daysRented)
    {
        return $this->_price->getAmount($daysRented);
    }

    public function setPrice(IPrice $price)
    {
        $this->_price = $price;
    }

}