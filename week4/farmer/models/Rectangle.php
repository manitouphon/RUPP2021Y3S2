<?php

require_once(__DIR__ . '/../interface/IShape.php');

class Rectangle implements IShape
{
    public function __construct(
        protected float $width,
        protected float $height
    ) {}

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getType()
    {
        return 'rectangle';
    }
}