

var mymap = L.map('map', {
    center: [34.2410366, -118.5298632],
    zoom: 13
});

function addPoint(lat, long, building, name) {
    L.marker([lat, long],{
        title: name,
        alt: name
    }).bindTooltip(building + ' ' + name).openTooltip().addTo(mymap);
}

function start(accessToken) {
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: accessToken
    }).addTo(mymap);

    var csunBounds = [
        [34.235, -118.525],
        [34.235, -118.53],
        [34.245, -118.53],
        [34.245, -118.525]
    ];
    var boundLines = L.polyline(csunBounds);
    mymap.fitBounds(boundLines.getBounds());
}

function demoLine() {

    var latlngs = [
        [34.24141145, -118.529299945],
        [34.2410316, -118.529299945],
        [34.2410316, -118.5359581],
        [34.2413465, -118.5359581]
    ];

    addPoint(34.24141145, -118.529299945, 'JD2211', 'Jacaranda Hall');
    addPoint(34.2413465, -118.5359581, 'META+LAB', 'CSUN');

    var polyline = L.polyline(latlngs, {
        color: 'red', weight: 5
    }).addTo(mymap);

    mymap.fitBounds(polyline.getBounds());
}