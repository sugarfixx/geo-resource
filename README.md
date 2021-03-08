# Geo-resource

more to come

## Install
Install using composer
```angular2html

{
   "require":{
      "sugarfixx/geo-resource":"0.1"
   },
   "repositories":[
      {
         "type":"vcs",
         "url":"git@github.com:sugarfixx/geo-resource.git"
      }
   ]
}
```

#Usage example
```angular2html
<?php
require 'vendor/autoload.php';

use GeoResource\GeoResource;
use GeoResource\GetClosest;
use GeoResource\ListByDistance;

if ($_SERVER['REMOTE_ADDR'] ='192.168.10.1') {
    $_SERVER['REMOTE_ADDR'] = '46.9.243.52'; // oslo
    // $_SERVER['REMOTE_ADDR'] = '69.123.246.32'; // New York
}
$ip = $_SERVER['REMOTE_ADDR'];
$regionalDatacenters = [
    [
        "name" => "Oslo",
        "latitude" => "59.8288",
        "longitude" => "10.6287",
        "tenants" => ['DNN', 'UEFA']
    ],
    [
        "name" => "Hilversum",
        "latitude" => "52.2300",
        "longitude" => "5.1800",
        "tenants" => ['UEFA', 'DAZN']
    ],
    [
        "name" => "Washington DC",
        "latitude" => "38.8951",
        "longitude" => "-77.0364",
        "tenants" => ['ESPN', 'DAZN']
    ]
];
echo '<pre>';
// instantiate GeoResource and pass Strategy as part of constructor
$gr = new GeoResource(new ListByDistance(),$ip, $regionalDatacenters);
var_dump($gr->fetchData());

echo '<hr>';
// switch strategy on the same object
$gr->setStrategy(new GetClosest());
var_dump($gr->fetchData());

echo '<hr>';
// apply filter on same object
var_dump($gr->fetchData('DAZN'));

```
