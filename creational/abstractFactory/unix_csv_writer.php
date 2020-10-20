<?php
namespace DesignPatterns\Creational\AbstractFactory;

class unix_csv_writer implements csv_writer {
    public function write(array $line): string {
        return join(',', $line) . "\n";
    }
}
?>