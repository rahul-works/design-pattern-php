<?php
namespace DesignPatterns\Creational\AbstractFactory;

class win_writer_factory implements writer_factory {
    public function create_json_writer(): json_writer
    {
        return new win_json_writer();
    }
    public function create_csv_writer(): csv_writer
    {
        return new win_csv_writer();
    }
}