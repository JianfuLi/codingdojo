<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/26
 * Time: 14:40
 */
class RomanNumerals
{

    public function  convert($num)
    {
        return $this->convert0_9($num);
    }


    public  function convert0_9($num)
    {
        $result = '';
        switch($num)
        {
            case 9:
                $result = "IX";
                break;
            case 8:
            case 7:
            case 6:
            case 5:
                $result = substr('VIII',0,$num- 4);
                break;
            case 4:
                $result = "IV";
                break;
            case 3:
            case 2:
            case 1:
                $result = substr('III',0,$num);
                break;
        }
        return $result;
    }


    public  function convert10_99($num)
    {

        $gewei = $num % 10;
        $shiwei = intval($num  / 10);
        $result = '';
        switch($shiwei)
        {
            case 9:
                $result = "XC";
                break;
            case 8:
            case 7:
            case 6:
            case 5:
                $result = substr('LXXX',0,$shiwei- 4);
                break;
            case 4:
                $result = "XL";
                break;
            case 3:
            case 2:
            case 1:
                $result = substr('XXX',0,$shiwei);
                break;
        }
        return $result.$this->convert0_9($gewei);
    }
} 