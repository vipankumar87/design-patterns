<?php

use Cloning\Person;

it('Can copy all property', closure: function () {
    $bob = new Person('Bob');
    $bob->address->setStreet('North 1st Street');
    $bob->address->setCity('San Jose');
    $bob2 = clone $bob;
    $bob->address->setStreet("Aaaaaaaaaaaaaa");
    var_dump($bob);
    var_dump($bob2);
});