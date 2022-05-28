<?php

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A {
}

$a1 = new A(); // создается экземпляр класса A
$b1 = new B(); // создается экземпляр класса B, при этом создается новый static $x, остальное так же как и в task3.php
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2
