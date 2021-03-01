<?php


namespace GeoResource;


class Location
{
    private $name;

    private $latitude;

    private $longitude;

    public function __construct($name = null, $latitude = null, $longitude = null)
    {
        if ($name) {
            $this->name = $name;
        }
        if ($latitude) {
            $this->latitude = $latitude;
        }
        if ($longitude) {
            $this->latitude = $longitude;
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Location
     */
    public function setName(string $name) : string
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLatitude() : Location
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Location
     */
    public function setLatitude(float $latitude) : Location
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLongitude() : Location
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Location
     */
    public function setLongitude(float $longitude) : Location
    {
        $this->longitude = $longitude;
        return $this;
    }


}
