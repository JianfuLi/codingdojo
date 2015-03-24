<?php
/**
 * Created by PhpStorm.
 * User: ljf
 * Date: 14-8-22
 * Time: 下午4:06
 */

class RegularPrice implements IPrice{

    public function getAmount($daysRented)
    {
        $amount = 2;
        if ($daysRented > 2) {
            $amount += ($daysRented - 2) * 1.5;
        }
        return $amount;
    }
}