<?php

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;

test("Can get books", closure: function () {
    $fooPrototype = new FooBookPrototype();
    $barPrototype = new BarBookPrototype();

    for ($i = 0; $i < 10; $i++) {
        $book = clone $fooPrototype;
        $book->setTitle('Foo Book No ' . $i);
        $this->assertInstanceOf(FooBookPrototype::class, $book);
    }

    for ($i = 0; $i < 5; $i++) {
        $book = clone $barPrototype;
        $book->setTitle('Bar Book No ' . $i);
        $this->assertInstanceOf(BarBookPrototype::class, $book);
    }
});