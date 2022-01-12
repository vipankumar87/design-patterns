<?php

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;

test('Can create Stdout Logging', closure: function () {
    $logging = new StdoutLoggerFactory();
    $logger = $logging->createLogger();
    expect($logger)->toBeInstanceOf(StdoutLogger::class);
});

test('Can create File Logging', closure: function () {
    $logging = new FileLoggerFactory(sys_get_temp_dir());
    $logger = $logging->createLogger();
    expect($logger)->toBeInstanceOf(FileLogger::class);
});

test('Can not create Stdout Logging', closure: function () {
    $logging = new StdoutLoggerFactory();
    $logger = $logging->createLogger();
    expect($logger)->toBeInstanceOf(StdoutLogger::class);
});

test('Can not create File Logging', closure: function () {
    $logging = new FileLoggerFactory(sys_get_temp_dir());
    $logger = $logging->createLogger();
    expect($logger)->toBeInstanceOf(FileLogger::class);
});

