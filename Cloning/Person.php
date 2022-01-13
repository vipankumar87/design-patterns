<?php

namespace Cloning;

use JetBrains\PhpStorm\Pure;

class Person
{
    public mixed $name;
    public Address $address;

    /**
     * @param $name
     */
    #[Pure] public function __construct($name)
    {
        $this->name = $name;
        $this->address = new Address();
    }

    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}