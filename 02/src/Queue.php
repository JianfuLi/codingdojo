<?php

/**
 * Created by PhpStorm.
 * User: lijf
 * Date: 2014/9/24
 * Time: 17:33
 */
class Queue
{
    protected $count;

    function __construct($count)
    {
        $this->count = $count;
    }

    public function numberOff($first, $second, $third)
    {
        $result = array();
        for ($i = 1; $i <= $this->count; $i++) {
            $student = new Student($first, $second, $third);
            $result[] = $student->say($i);
        }
        return implode("\n", $result);
    }
} 