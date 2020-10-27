<?php 
declare(strict_types=1);

namespace DesignPatterns\creational\FactoryMethod;

class StdoutLogger implements Logger {
    public function log (string $message) {
        echo $message;
    }
}