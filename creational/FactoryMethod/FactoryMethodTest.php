<?php declare(strict_types=1);

namespace DesignPatterns\creational\FactoryMethod\Tests;

use DesignPatterns\creational\FactoryMethod\FileLogger;
use DesignPatterns\creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\creational\FactoryMethod\StdoutLogger;
use DesignPatterns\creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}