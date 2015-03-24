<?php
/**
 * Created by PhpStorm.
 * User: ljf
 * Date: 14-8-22
 * Time: 下午4:35
 */

class PriceStrategyFactory
{
    static function createPriceStrategy(Movie $movie)
    {
        switch ($movie->getPriceCode()) {
            case Movie::REGULAR:
                return new RegularPrice();
            case Movie::NEW_RELEASE:
                return new NewReleasePrice();
            case Movie::CHILD_RENS:
                return new ChildrenPrice();
        }
    }
} 