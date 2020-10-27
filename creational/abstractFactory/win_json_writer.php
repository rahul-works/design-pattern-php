<?php
namespace DesignPatterns\Creational\AbstractFactory;

class win_json_writer implements json_writer{
    public function write(array $data, bool $formated): string{
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
?>