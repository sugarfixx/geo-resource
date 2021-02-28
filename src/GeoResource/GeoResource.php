<?php


namespace GeoResource;


class GeoResource
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function fetchData(): void
    {
        $result = $this->strategy->getData();
    }
}
