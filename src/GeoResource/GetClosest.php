<?php


namespace GeoResource;


class GetClosest implements Strategy
{
    private $base;

    private $destinations;

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function setBase(Location $base)
    {
        $this->base = $base;
    }

    public function setDestinations(array $destinations)
    {
        $this->destinations = $destinations;
    }

    private function getDistance()
    {
        $base ='';
        $destination = '';
        $distance = new Distance();
        $distance->setBase($base);
        $distance->setDestination($destination);
        return $distance->betweenBaseAndDestination();
    }
}
