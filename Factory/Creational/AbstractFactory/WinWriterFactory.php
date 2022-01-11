<?php

namespace DesignPatterns\Creational\AbstractFactory;

use JetBrains\PhpStorm\Pure;

class WinWriterFactory implements WriterFactory
{

    /**
     * @return CsvWriter
     */
    #[Pure] public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    /**
     * @return JsonWriter
     */
    #[Pure] public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}