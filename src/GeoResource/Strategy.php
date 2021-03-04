<?php


namespace GeoResource;


interface Strategy
{
    public function setResultSet(ResultSet $resultSet);
    public function getData();
}
