<?php


namespace GeoResource;


class ListByDistance implements Strategy
{
    private $resultSet;

    public function setResultSet(ResultSet $resultSet)
    {
        $this->resultSet = $resultSet;
    }
    public function getData()
    {
        return $this->listClosest();
    }

    public function listClosest()
    {
        $dc = $this->resultSet->data;
        usort($dc, function ($a, $b) {
            return $b['distance'] < $a['distance'];
        });
        return $dc;
    }
}
