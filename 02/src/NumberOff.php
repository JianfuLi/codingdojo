<?php

/**
 *
 *
 * @version   1.0
 * @author    jianphu (me@ljf.me)
 * @create    2014/9/23 10:09
 * @copyright Copyright (c) 2014 (http://ljf.me)
 */
class NumberOff
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

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @return mixed
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * @return mixed
     */
    public function getThird()
    {
        return $this->third;
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

    public function countOff($count)
    {
        for ($i = 1; $i <= $count; $i++) {
            $this->say($i);
        }
    }
} 