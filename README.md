# World Map and GeoLocation

World Map and GeoLocation using Canvas, JavaScript and PHP with latitude and longitude tracking features.

## World Map Demo using Canvas:

https://lrusso.github.io/WorldMapGeoLocation/WorldMap.htm

## World Map - Script for drawing the map:

```
var map = new Map();
map.draw(document.getElementById("demo1"));
```

## World Map - Script for drawing a point in the map:

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

## World Map based on the work of:

https://github.com/richardzcode/worldMap.js
