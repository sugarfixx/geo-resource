<?php


namespace GeoResource;


class GeoPlugin
{
    private $ip;
    public function __construct($ip)
    {
        $this->ip = $ip;
    }

    public function ipToLocation() : Location
    {
        $data = unserialize(
            file_get_contents('http://www.geoplugin.net/php.gp?ip='.$this->ip)
        );

        $location = new Location();
        $location->setName('Base');
        $location->setLatitude($data['geoplugin_latitude']);
        $location->setLongitude($data['geoplugin_longitude']);

        return $location;
    }
}
