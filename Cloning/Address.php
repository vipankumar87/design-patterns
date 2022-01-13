<?php

namespace Cloning;

class Address
{
    private mixed $street;
    private mixed $city;

    /**
     * @return mixed
     */
    public function getStreet(): mixed
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return Address
     */
    public function setStreet(mixed $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity(): mixed
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return Address
     */
    public function setCity(mixed $city): Address
    {
        $this->city = $city;
        return $this;
    }
}