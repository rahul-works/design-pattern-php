<?php
namespace DesignPatterns\Creational\AbstractFactory;

interface json_writer {
    public function write(array $data, bool $formated): string;
}
?>