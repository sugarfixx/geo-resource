<?php


namespace GeoResource;


class ListByDistance implements Strategy
{
    private $base;

    private $destinations;

    public function setBase(Location $base)
    {
        $this->base = $base;
    }

    public function setDestinations(array $destinations)
    {
        $this->destinations = $destinations;
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }
}
