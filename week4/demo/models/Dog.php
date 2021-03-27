<?php

class Dog
{
    public function __construct(
        public string $name,
        public ?string $color = null
    ){}

    public function getName()
    {
        return $this->name;
    }
}

?>