<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $capacity;

    /**
     * @var int
     */
    private $filling = 0;

    /**
     * Truck constructor.
     * @param string $color
     * @param int $nbSeats
     * @param int $capacity
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Truck
     */
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity){
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getFilling(): int
    {
        return $this->filling;
    }

    /**
     * @param int $filling
     * @return string
     */
    public function setFilling(int $filling): string
    {
        if ($filling < $this->capacity){
            $this->filling = $filling;
            return "you have loaded " . $this->filling;
        }elseif ($filling > $this->capacity){
            $substract = $filling - $this->capacity;
            return "You can't add " . $filling . " load. Your capacity is only " . $this->getCapacity() . ". You're " . $substract . " too many !";
        }else{
            $this->filling = $filling;
            return "Full !!!";
        }
    }
}