<?php


namespace GeoResource;


interface Strategy
{
    public function getData($base, $destinations);
}
