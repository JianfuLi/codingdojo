<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 14-9-19
 * Time: 下午2:25
 */
class Game
{
    public $specialCodes;
    private $_magicCode;

    function __construct($magic)
    {
        $this->_magicCode = $magic;
        $this->setSpecialCode();
    }

    public function setSpecialCode($code = array())
    {
        if (!empty($code)) {
            $this->specialCodes = $code;
        } else {
            $this->specialCodes = array(3 => 'Fizz', 5 => 'Buzz', 7 => 'Whizz');
        }
    }

    public function getSpecialCode()
    {
        return $this->specialCodes;
    }

    public function play()
    {
        for ($i = 1; $i <= 100; $i++) {
            echo $this->run($i) . "\n";
        }
    }

    public function run($num)
    {
        if (strpos($num, $this->_magicCode) !== false) {
            return $this->specialCodes[$this->_magicCode];
        }
        $str = '';
        foreach ($this->specialCodes as $k => $v) {

            if ($num % $k == 0) {
                $str .= $v;
            }
        }

        return !empty($str) ? $str : $num;
    }

}