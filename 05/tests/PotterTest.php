<?php
require '../src/Potter.php';

class PotterTest extends PHPUnit_Framework_TestCase
{
    public function testBasics()
    {
        $potter = new Potter();
        $this->assertEquals(0, $potter->price());

    }

} 