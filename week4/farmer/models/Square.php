<?php

require_once(__DIR__ . '/../interface/IShape.php');

class Square implements IShape
{
    protected $edge;

    public function __construct($edge)
    {
        $this->edge = $edge;
    }

    public function getArea()
    {
        return $this->edge * $this->edge;
    }

    public function getType()
    {
        return 'square';
    }
}