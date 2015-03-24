<?php
/**
 * Created by PhpStorm.
 * User: ljf
 * Date: 14-8-22
 * Time: 下午4:06
 */

class ChildrenPrice implements IPrice{

    public function getAmount($daysRented)
    {
        $amount = 1.5;
        if ($daysRented > 3) {
            $amount += ($daysRented - 3) * 1.5;
        }
        return $amount;
    }
}