<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/24
 * Time: 17:09
 */
class Student
{
    protected $first;
    protected $second;
    protected $third;

    function __construct($first, $second, $third)
    {
        $this->first = $first;
        $this->second = $second;
        $this->third = $third;
    }

    public function say($number)
    {
        if (strpos(strval($number), strval($this->first)) !== false) {
            return 'Fizz';
        }

        $word = '';
        if ($number % $this->first == 0) {
            $word .= 'Fizz';
        }
        if ($number % $this->second == 0) {
            $word .= 'Buzz';
        }
        if ($number % $this->third == 0) {
            $word .= 'Whizz';
        }

        return empty($word) ? strval($number) : $word;
    }
} 