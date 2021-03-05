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
     * @return Distance
     */
    public function setBase(Location $base): Distance
    {
        $this->base = $base;
        return $this;
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
     * @return Distance
     */
    public function setDestination(Location $destination): Distance
    {
        $this->destination = $destination;
        return $this;
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
