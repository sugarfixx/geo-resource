<?php


namespace GeoResource;


class ResultSet
{
    private $data;

    /**
     * @return ResultSet
     */
    public function getData() : ResultSet
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ResultSet
     */
    public function setData(array $data) : ResultSet
    {
        $this->data = $data;
        return $this;
    }

    public function addData(array $data) : void
    {
        array_push($this->data, $data);
    }

}
