<?php
namespace DesignPatterns\Creational\AbstractFactory;

class unix_writer_factory implements writer_factory {
    public function create_csv_writer(): csv_writer{
        return new unix_csv_writer();
    }
    public function create_json_writer(): json_writer{
        return new unix_json_writer();
    }
}
?>