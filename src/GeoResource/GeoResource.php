<?php


namespace GeoResource;


class GeoResource
{
    private $strategy;

    private $base;

    private $destinations;

    private $filter;

    public function __construct(Strategy $strategy, $ip, array $locations)
    {
        $this->strategy = $strategy;
        $this->setBase($ip);
        $this->setDestinations($locations);
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    private function setBase($ip)
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

    public function fetchData($filter = null)
    {
        $this->filter = $filter;

        $data = $this->buildResultSet();
        $this->strategy->setResultSet($data);

        return $this->strategy->getData();
    }

    private function buildResultSet() : ResultSet
    {
        $resultSet = new ResultSet();
        foreach ($this->destinations as  $destination) {
            if (is_null($this->filter) || $this->applyFilter($destination)) {
                $distance = (new Distance())->setBase($this->base)->setDestination($destination);
                $resultSet->addData([
                    'destination' => $destination,
                    'distance' => $distance->betweenBaseAndDestination()
                ]);
            }
        }
        return  $resultSet;
    }

    private function applyFilter($destination) : bool
    {
        return in_array($this->filter, $destination->tenants);
    }
}
