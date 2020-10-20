<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\csv_writer;
use DesignPatterns\Creational\AbstractFactory\json_writer;
use DesignPatterns\Creational\AbstractFactory\unix_writer_factory;
use DesignPatterns\Creational\AbstractFactory\win_writer_factory;
use DesignPatterns\Creational\AbstractFactory\writer_factory;
use PHPUnit\Framework\TestCase;


class abstract_factory_test extends TestCase 
{
    public function provideFactory()
    {
        return [
            [new unix_writer_factory()],
            [new win_writer_factory()],            
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param writer_factory $writer_factory
     */
    public function test_can_create_csv_writer_on_unix(writer_factory $writer_factory) 
    {
        $this->assertInstanceOf(json_writer::class, $writer_factory->create_json_writer());
        $this->assertInstanceOf(csv_writer::class, $writer_factory->create_csv_writer());
    }
}
?>