<?php


namespace GeoResource;


class GetClosest implements Strategy
{
    private $resultSet;

    public function setResultSet(ResultSet $resultSet)
    {
        $this->resultSet = $resultSet;
    }

    public function getData()
    {
        return $this->findClosest();
    }

    private function findClosest()
    {
        $dc = $this->resultSet->data;
        usort($dc, function ($a, $b) {
            return $b['distance'] < $a['distance'];
        });
        return $dc[0];
    }
}
