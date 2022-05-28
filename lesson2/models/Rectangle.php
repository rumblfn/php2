<?php

namespace app\models;

class Rectangle extends Figure
{
    protected $name = "Rectangle";

    public function __construct(float $side_a, float $side_b)
    {
        $this->square = $side_a * $side_b;
        $this->perimeter = 2 * ($side_a + $side_b);
    }
}