<?php


namespace GeoResource;


interface Strategy
{
    public function setResultSet($resultSet);
    public function getData();
}
