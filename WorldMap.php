<?php

require "WorldMap/autoload.php";

use GeoIp2\Database\Reader;

// Grab the latest GeoIP2 Lite Database(s): https://dev.maxmind.com/geoip/geoip2/geolite2/
// Grab the latest geoip2.phar: https://github.com/maxmind/GeoIP2-php/releases

$reader = new Reader("WorldMap/worldmap.dat");
$record = $reader->city("186.137.166.235");

echo "IP: " . "186.137.166.235<br/>";
echo "Country: " . $record->country->name . "<br/>";
echo "State: " . $record->mostSpecificSubdivision->name . "<br/>";
echo "City: " . $record->city->name . "<br/>";
echo "Latitude: " . $record->location->latitude . "<br/>";
echo "Longitude: " . $record->location->longitude;

?>
