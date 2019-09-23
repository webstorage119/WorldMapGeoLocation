# World Map and GeoLocation

World Map and GeoLocation using Canvas, JavaScript and PHP with latitude and longitude tracking features.

## World Map - Demo using Canvas:

https://lrusso.github.io/WorldMapGeoLocation/WorldMap.htm

## World Map - JavaScript - Code for drawing the World Map in a Canvas:

```
var map = new Map();
map.draw(document.getElementById("demo1"));
```

## World Map - JavaScript - Code for drawing a point in the map:

```
var locationLatitude = -34.6021;
var locationLongitude = -58.3845;

var locationX = ((locationLongitude / 360) + 0.5) * document.getElementById("demo1").width;
var locationY = (1 - ((locationLatitude / 180) + 0.5)) * document.getElementById("demo1").height;

document.getElementById("demo1").getContext("2d").beginPath();
document.getElementById("demo1").getContext("2d").arc(locationX, locationY, 3, 0, 2 * Math.PI);
document.getElementById("demo1").getContext("2d").fillStyle = "red";
document.getElementById("demo1").getContext("2d").fill();
```

## World Map - JavScript - Code for getting the distance (in KM) between two points

```
function distance(lat1, lon1, lat2, lon2)
    {
    var p = 0.017453292519943295;    // Math.PI / 180
    var c = Math.cos;
    var a = 0.5 - c((lat2 - lat1) * p)/2 + c(lat1 * p) * c(lat2 * p) * (1 - c((lon2 - lon1) * p))/2;

    return 12742 * Math.asin(Math.sqrt(a)); // 2 * R; R = 6371 km
    }
```

## GeoLocation - PHP - Code for getting Country, State, City, Latitude and Longitude from an IP address:

```
require "WorldMap/autoload.php";

use GeoIp2\Database\Reader;

$reader = new Reader("WorldMap/worldmap.dat");
$record = $reader->city("186.137.166.235");

echo "IP: " . "186.137.166.235<br/>";
echo "Country: " . $record->country->name . "<br/>";
echo "State: " . $record->mostSpecificSubdivision->name . "<br/>";
echo "City: " . $record->city->name . "<br/>";
echo "Latitude: " . $record->location->latitude . "<br/>";
echo "Longitude: " . $record->location->longitude;
```

## World Map based on the work of:

https://github.com/richardzcode/worldMap.js

## GeoLocation database from:

https://dev.maxmind.com/geoip/geoip2/geolite2

## GeoLocation database reader from:

https://github.com/maxmind/GeoIP2-php/releases
