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
        $destinations = [];
        foreach ($locations as $location) {
            $destinations[] = (new Location())->setName($location['name'])
                ->setLatitude($location['latitude'])
                ->setLongitude($location['longitude']);
        }
        $this->destinations = $destinations;
    }

    public function fetchData(): void
    {


        $result = $this->strategy->getData();
        header("Content-type: application/json");
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
}
