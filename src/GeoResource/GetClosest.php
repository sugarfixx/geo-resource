<?php


namespace GeoResource;


class GetClosest implements Strategy
{
    public function getData()
    {
        // TODO: Implement getData() method.
    }

    private function getDistance()
    {
        $base ='';
        $destination = '';
        $distance = new Distance();
        $distance->setBase($base);
        $distance->setDestination($destination);
        return $distance->betweenBaseAndDestination();
    }
}
