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
        // TODO: Implement getData() method.
    }
}
