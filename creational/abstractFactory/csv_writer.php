<?php
namespace DesignPatterns\Creational\AbstractFactory;

interface csv_writer {
    public function write(array $line): string;
}
?>