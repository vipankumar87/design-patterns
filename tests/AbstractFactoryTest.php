<?php

use DesignPatterns\Creational\AbstractFactory\CsvWriter;
use DesignPatterns\Creational\AbstractFactory\JsonWriter;
use DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WinWriterFactory;

test('Factory method will return same class', function () {
    expect(true)->toBeTrue();
    $classes = [
        new UnixWriterFactory(),
        new WinWriterFactory(),
    ];
    foreach ($classes as $writerFactory) {
        expect($writerFactory->createJsonWriter())->toBeInstanceOf(JsonWriter::class);
        expect($writerFactory->createCsvWriter())->toBeInstanceOf(CsvWriter::class);
    }
});
