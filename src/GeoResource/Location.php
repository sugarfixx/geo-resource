<?php


namespace GeoResource;


class Location
{
    public $name;

    public $latitude;

    public $longitude;

    public $tenants;

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
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Location
     */
    public function setName(string $name) : Location
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLatitude() : float
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
     * @return float
     */
    public function getLongitude() : float
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

    /**
     * @return array
     */
    public function getTenants() : array
    {
        return $this->tenants;
    }

    /**
     * @param array $tenants
     * @return Location
     */
    public function setTenants(array $tenants): Location
    {
        $this->tenants = $tenants;
        return $this;
    }


}
