<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}


class Car
{
    public int $nbWheels;
    public int $currentSpeed;
    public string $color;
    public int $nbSeats;
    public string $energy;
    public int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string {
        $this->currentSpeed = 0;
        return 'En route Homer';
    }

    public function forward(): string {
        $this->currentSpeed <= 30;
        return 'Appuie sur le champignon Homer';
    }

    public function brake(): string {
        $this->currentSpeed >= 100;
        return 'Ralentis Homer';
    }

    public function getNbWheels(): integer {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): integer {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): integer {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): integer {
        return $this->energyLevel;
    }
}
