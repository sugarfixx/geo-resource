<?php


namespace GeoResource;


class Distance
{
    private $base;

    private $destination;

    /**
     * @return Location
     */
    public function getBase() : Location
    {
        return $this->base;
    }

    /**
     * @param Location $base
     */
    public function setBase(Location $base): void
    {
        $this->base = $base;
    }

    /**
     * @return Location
     */
    public function getDestination() : Location
    {
        return $this->destination;
    }

    /**
     * @param Location $destination
     */
    public function setDestination(Location $destination): void
    {
        $this->destination = $destination;
    }


    public function betweenBaseAndDestination() : float
    {
        //  Pythagorean theorem
        // d=√((x_2-x_1)²+(y_2-y_1)²)

        $x = $this->base->latitude - $this->destination->latitude;
        $y = $this->base->longitude - $this->destination->longitude;

        return sqrt(($x**2) + ($y**2));
    }
}
