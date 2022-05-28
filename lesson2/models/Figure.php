<?php

namespace app\models;

abstract class Figure
{
    protected $square;
    protected $perimeter;

    public function getSquare(): string
    {
        return "square $this->square<br>";
    }

    public function getPerimeter(): string
    {
        return "perimeter $this->perimeter<br>";
    }

    public function info() {
        echo "I am a $this->name.<br>";
    }
}