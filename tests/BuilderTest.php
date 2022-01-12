<?php

use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\TruckBuilder;


it("Can build truck", function () {
    $truckBuilder = new TruckBuilder();
    $newVehicle = (new Director())->build($truckBuilder);
    expect($newVehicle)->toBeInstanceOf(Truck::class);
});
it("Can build car", closure: function () {
    $truckBuilder = new CarBuilder();
    $newVehicle = (new Director())->build($truckBuilder);
    expect($newVehicle)->toBeInstanceOf(Car::class);
});

test("Truck is vehicle", function () {
    $truckBuilder = new TruckBuilder();
    $newVehicle = (new Director())->build($truckBuilder);
    expect($newVehicle)->toBeInstanceOf(Vehicle::class);
});
test("Car is vehicle", closure: function () {
    $truckBuilder = new CarBuilder();
    $newVehicle = (new Director())->build($truckBuilder);
    expect($newVehicle)->toBeInstanceOf(Vehicle::class);
});