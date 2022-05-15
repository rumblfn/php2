<?php

class ShopTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $x = 1;
        $y = 2;
        $this->assertEquals(3, $x + $y);
    }

    public function testHtAccessExist()
    {
        $this->assertFileExists(dirname(__DIR__) . "/public/.htaccess");
    }
}