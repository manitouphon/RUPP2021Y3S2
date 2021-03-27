<?php

require_once(__DIR__ . '/../interface/IShape.php');

class Triangle implements IShape
{
    public function __construct(
        protected float $a,
        protected float $b,
        protected float $c
    ) {}

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }

    public function getArea()
    {
        $s = $this->getPerimeter() / 2;

        return sqrt( $s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c) );
    }

    public function getType()
    {
        return 'triangle';
    }
}