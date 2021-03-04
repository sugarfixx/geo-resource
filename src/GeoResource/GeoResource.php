<?php


namespace GeoResource;


class GeoResource
{
    private $strategy;

    private $base;

    private $destinations;

    public function __construct(Strategy $strategy, float $ip, array $locations)
    {
        $this->strategy = $strategy;
        $this->setBase($ip);
        $this->setDestinations($locations);
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    private function setBase(float $ip)
    {
        $this->base = (new GeoPlugin($ip))->ipToLocation();
    }

    private function setDestinations(array $locations)
    {

    }

    public function fetchData(): void
    {
        $result = $this->strategy->getData($this->ip);
        header("Content-type: application/json");
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
