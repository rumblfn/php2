<?php

use app\models\entities\User;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    protected $fixture;

    protected function setUp(): void
    {
        $this->fixture = new User();
    }

    public function testUserPassword()
    {
        $password = '123456';
        $this->fixture = new User('', $password);
        $this->assertTrue(password_verify($password, $this->fixture->password));
    }

    protected function tearDown(): void
    {
        $this->fixture = NULL;
    }
}