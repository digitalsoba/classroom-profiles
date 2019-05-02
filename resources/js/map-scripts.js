//Sets the starting area of the map to show the area around CSUN
var mymap = L.map('map', {
    center: [34.2410366, -118.5298632],
    zoom: 15
});

/**
 * Adds the given room onto the map
 * @param lat   The laditude of the room.
 * @param long  The longitude of the room.
 * @param building  The name of the room's building.
 * @param name  The name of the room.
 */
function addPoint(lat, long, building, name) {
    L.marker([lat, long],{
        title: name,
        alt: name
    }).bindTooltip(building + ' ' + name).openTooltip().addTo(mymap);
}

/**
 * Calls leaflet and Open Street Map, gets our map information and adds it to our map object.
 * @param accessToken   Open Street Map's API access token.
 */
function start(accessToken) {
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> ' +
            'contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: accessToken
    }).addTo(mymap);
    mymap.zoom = 15;
}

/**
 * Adds a collection of rooms, and can draw lines between them in the order given
 * @param rooms     A collection of rooms, each room expected as an array containing
 *                  laditude, longitude, building name, and room name, in that order.
 * @param connected If the rooms in the collection should be connected with lines.
 */
function addMultiplePoints(rooms, connected)
{
    //rooms = JSON.parse(rooms);
    var latlongs = [];
    for(room of rooms)
    {
        addPoint(room[0], room[1], room[2], room[3]);
        latlongs.push([room[0], room[1]]);
    }

    var polyline = L.polyline(latlongs, {
        color: 'red', weight: 5
    });

    if(connected)
    {
        polyline.addTo(mymap);
    }

    mymap.fitBounds(polyline.getBounds());
}