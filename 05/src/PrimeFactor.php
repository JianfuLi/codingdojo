<?php

/**
 *
 *
 * @version   1.0
 * @author    jianphu (me@ljf.me)
 * @create    2014/12/18 11:18
 * @copyright Copyright (c) 2014 (http://ljf.me)
 */
class PrimeFactor
{
    public function factorize($number)
    {
        $result = array();
        for ($i = 2; $i <= $number; $i++) {
            while ($number % $i == 0 && $number != $i) {
                $result[] = $i;
                $number = $number / $i;
            }
        }
        $result[] = $number;
        return $result;
    }
}