<?php

use DesignPatterns\Creational\AbstractFactory\CsvWriter;
use DesignPatterns\Creational\AbstractFactory\JsonWriter;
use DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatterns\Creational\AbstractFactory\WinWriterFactory;
use JetBrains\PhpStorm\Pure;

class AbstractFactoryTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected UnitTester $tester;

    public function testSomeFeature()
    {
        foreach ($this->provideFactory() as $writerFactory) {
            $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
            $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
        }
    }

    /**
     * @return array
     */
    #[Pure] public function provideFactory(): array
    {
        return [
            new UnixWriterFactory(),
            new WinWriterFactory(),
        ];
    }

    protected function _before()
    {
    }

    // tests

    protected function _after()
    {
    }
}