<?php

namespace app\models;

class Triangle extends Figure
{
    protected $name = "Triangle";

    public function __construct(float $side_a, float $side_b, float $side_c)
    {
        $p = ($side_a + $side_b + $side_c) / 2;
        $this->square = pow($p * ($p - $side_a) * ($p - $side_b) * ($p - $side_c), 0.5);
        $this->perimeter = 2 * $p;
    }
}