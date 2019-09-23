<?php

require "WorldMap/autoload.php";

use GeoIp2\Database\Reader;

$reader = new Reader("WorldMap/worldmap.dat");
$record = $reader->city("186.137.166.235");

echo "IP: " . "186.137.166.235<br/>";
echo "Country: " . $record->country->name . "<br/>";
echo "State: " . $record->mostSpecificSubdivision->name . "<br/>";
echo "City: " . $record->city->name . "<br/>";
echo "Latitud: " . $record->location->latitude . "<br/>";
echo "Longitude: " . $record->location->longitude;

?>