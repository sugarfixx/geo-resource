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
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return Location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return Location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }


}
