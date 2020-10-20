<?php
namespace DesignPatterns\Creational\AbstractFactory;

class win_csv_writer implements csv_writer {
    public function write(array $line): string {
        return join(',', $line). "\r\n";
    }
}
?>