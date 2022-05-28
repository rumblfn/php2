<?php

namespace app\models;

class Circle extends Figure
{
    protected $name = "Circle";

    public function __construct(float $radius)
    {
        $this->square = 3.14 * pow($radius, 2);
        $this->perimeter = 2 * 3.14 * $radius;
    }
}