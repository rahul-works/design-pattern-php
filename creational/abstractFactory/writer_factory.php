<?php 

/*
// to create series of related or dependent objects without specifying their concrete classes
// the created classes all implement the same interface 
// client of the abstract factory does not care about how these objects are created, it just know how they ggo together 

                Writer Factory (json/csv)
                       |
                       |
                -----------------       
                |               |
        WinWriter Factory   UnixWriterFactory
        (json/csv)          (json/csv)
*/
namespace DesignPatterns\Creational\AbstractFactory;
interface writer_factory {
    public function create_csv_writer(): csv_writer;
    public function create_json_writer(): json_writer;
}
?>

