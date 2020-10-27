<?php declare(strict_types=1);

namespace DesignPatterns\creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}