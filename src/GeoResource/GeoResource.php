<?php


namespace GeoResource;


class GeoResource
{
    private $strategy;

    private $ip;

    private $locations;

    public function __construct(Strategy $strategy, $ip, $locations)
    {
        $this->strategy = $strategy;
        $this->ip = $ip;
        $this->locations = $locations;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function fetchData(): void
    {
        $result = $this->strategy->getData();
        header("Content-type: application/json");
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
