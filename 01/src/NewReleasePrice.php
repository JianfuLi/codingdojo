<?php
/**
 * Created by PhpStorm.
 * User: ljf
 * Date: 14-8-22
 * Time: 下午4:06
 */

class NewReleasePrice implements IPrice{

    public function getAmount($daysRented)
    {
        return $daysRented * 3;
    }
}