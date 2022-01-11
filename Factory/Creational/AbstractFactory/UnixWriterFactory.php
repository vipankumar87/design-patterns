<?php

namespace DesignPatterns\Creational\AbstractFactory;

use JetBrains\PhpStorm\Pure;

class UnixWriterFactory implements WriterFactory
{

    #[Pure] public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    #[Pure] public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}