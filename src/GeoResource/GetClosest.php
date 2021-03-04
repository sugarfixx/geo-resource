<?php


namespace GeoResource;


class GetClosest implements Strategy
{
    private $resultSet;

    public function setResultSet($resultSet)
    {
        $this->resultSet = $resultSet;
    }

    public function getData()
    {
        // TODO: Implement getData() method.
        return $this->findClosest();
    }

    private function findClosest()
    {
        return true;
    }
}
