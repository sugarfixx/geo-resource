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
                ->setLongitude($location['longitude'])
                ->setTenants($location['tenants']);
        }
        $this->destinations = $destinations;
    }

    public function fetchData(): void
    {
        $data = $this->buildResultSet();
        $this->strategy->setResultSet($data);
        $result = $this->strategy->getData();
        header("Content-type: application/json");
        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    private function buildResultSet()
    {
        $resultSet = new ResultSet();
        foreach ($this->destinations as  $destination) {
            $distance = (new Distance())->setBase($this->base)->setDestination($destination);
            $data[] = ['destination' => $destination, 'distance' => $distance->betweenBaseAndDestination()];
        }
        return  $resultSet;
    }
}
