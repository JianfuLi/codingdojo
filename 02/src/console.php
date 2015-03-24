<?php
/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 14-9-19
 * Time: 下午2:22
 */

class console {

    public $inputStream;

    function __construct($inputStream)
    {
        if(is_null($inputStream)){
            $this->inputStream = fopen('php://stdin','r');
        }
    }
}