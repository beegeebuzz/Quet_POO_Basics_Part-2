<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var int
     */
    private $capacity;

    /**
     * @var int
     */
    private $filling = 0;

    public function __construct(int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

}