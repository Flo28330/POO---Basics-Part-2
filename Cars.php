<?php

require "Vehicle.php";
class Cars extends Vehicle
{

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @var integer
     */
    private $currentFuel;

    /**
     * @return int
     */
    public function getCurrentFuel(): int
    {
        return $this->currentFuel;
    }

    /**
     * @var integer
     */


    public function __construct(string $color, int $nbSeat, string $energy)
    {
        parent::__construct($color, $nbSeat, $energy);
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energy = $energy;
    }

    public function start(): string
    {
        $currentFuel = 10;
        if ($currentFuel >= 5) {
            $this->currentFuel = $currentFuel;
            return "Let's go !! tu as assez de carburant !<br>";
        } else {
            return 'oh !!! fill up';
        }

    }
}
