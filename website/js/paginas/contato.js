$(document).ready(function () {
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGlicmlkYXdlYiIsImEiOiJja284djMyMWwwd20yMm9wd3QzbTZvZnhrIn0.ro1ZJXeWhkK2bCRqOHcx_A';

    var lat = -16.70462320664015;
    var long = -49.26433650500866;

    var map = new mapboxgl.Map({
        container: 'mapa', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [long, lat], // starting position [lng, lat]
        zoom: 14.180720990093583 // starting zoom
    });

    var marker;
    marker = new mapboxgl.Marker().setLngLat([long, lat]).addTo(map);

    $('.mapboxgl-marker').click(function () {
        map.flyTo({
            center: [long, lat],
            zoom: 15
        });
    });
})