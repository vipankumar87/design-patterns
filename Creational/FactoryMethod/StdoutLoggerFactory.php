<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

use JetBrains\PhpStorm\Pure;

class StdoutLoggerFactory implements LoggerFactory
{
    #[Pure] public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}