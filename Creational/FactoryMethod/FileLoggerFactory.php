<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

use JetBrains\PhpStorm\Pure;

class FileLoggerFactory implements LoggerFactory
{
    /**
     * @param string $filePath
     */
    public function __construct(private string $filePath)
    {
    }

    /**
     * @return Logger
     */
    #[Pure] public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}