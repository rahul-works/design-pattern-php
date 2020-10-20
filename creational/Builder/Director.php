<?php declare(strict_types=1);
namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director {
    public function build(Builder $builder): Vehicle {
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();
        $builder->createVehicle();
        return $builder->getVehicle();
    }
}
?>