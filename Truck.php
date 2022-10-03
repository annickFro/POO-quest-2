<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];    

    private string $energy;

    private int $energyLevel;
    private int $storageCapacity;
    private int $loading=0;
    
    /**
     * Contructor of Truck
     *
     * @param string $color
     * @param integer $nbSeats
     * @param string $energy
     * @param integer $storageCapacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        // $this->color = $color;
        // $this->nbSeats = $nbSeats;
        // $this->energy = $energy; 
        parent::__construct($color, $nbSeats);
        $this->setEnergy ($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        // $this->energy = $energy;
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function controlTheLoad() : string {
        if ($this->loading >= $this->storageCapacity) {
            return 'full' ;
        } else {
            return 'in filling' ;
        }
        
    }

}