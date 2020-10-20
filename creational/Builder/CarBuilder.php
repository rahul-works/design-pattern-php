<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder{
    private $car;

    public function addDoors() {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('truckLid', new Door());
    }

    public function addEngine() {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel() {
        $this->car->setPart('WheelFL', new Wheel());
        $this->car->setPart('WheelFR', new Wheel());
        $this->car->setPart('WheelRL', new Wheel());
        $this->car->setPart('WheelRR', new Wheel());
    }

    public function createVehicle() {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle {
        return $this->car;
    }
}
?>