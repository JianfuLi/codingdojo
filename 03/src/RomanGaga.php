<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/26
 * Time: 15:14
 */
class RomanGaga
{
    public function say($number)
    {
        return $this->transformForTen($number) . $this->transformSingle($number);
    }

    public function transformSingle($numberForSingle)
    {
        $returnStr = '';
        $number = $numberForSingle % 10;
        $baseStr = array('I', 'V', 'X');
        switch ($number) {
            case 1:
            case 2:
            case 3:
                $returnStr = str_pad('', $number, $baseStr[0]);
                break;
            case 4:
                $returnStr = $baseStr[0] . $baseStr[1];
                //$returnStr = 'IV';
                break;
            case 5:
                $returnStr = $baseStr[1];
                // $returnStr = 'V';
                break;
            case 6:
            case 7:
            case 8:
                $returnStr = $baseStr[1] . str_pad('', ($number - 5), $baseStr[0]);
                // $returnStr = 'VIII';
                break;
            case 9:
                $returnStr = $baseStr[0] . $baseStr[2];
                //$returnStr = 'IX';
                break;
        }
        return $returnStr;
    }

    public function transformForTen($numberforTen)
    {
        $returnStr = '';
        $number = intval($numberforTen / 10);
        switch ($number) {
            case 1:
                $returnStr = 'X';
                break;
            case 2:
                $returnStr = 'XX';
                break;
            case 3:
                $returnStr = 'XXX';
                break;
            case 4:
                $returnStr = 'XL';
                break;
            case 5:
                $returnStr = 'L';
                break;
            case 6:
                $returnStr = 'LX';
                break;
            case 7:
                $returnStr = 'LXX';
                break;
            case 8:
                $returnStr = 'LXXX';
                break;
            case 9:
                $returnStr = 'XC';
                break;
        }
        return $returnStr;
    }
}