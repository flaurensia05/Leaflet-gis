<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
        #mapid {
            height: 100%;
        }
    </style>
    <title>Leafet</title>
</head>

<body>
    <div id="mapid"></div>
    <iframe src="<iframe src="<iframe src="<iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.325132072652!2d105.2427122141295!3d-5.367281355200768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c535ab10e3fb%3A0xe54e447a49d9e70a!2sGd.Ilmu%20Komputer%20Universitas%20Lampung!5e0!3m2!1sen!2sid!4v1620545478005!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-5.3672814,105.2427122,17], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-5.364631, 105.242586]).addTo(mymap);  //marker

    var circle = L.circle([-5.36446, 105.253315], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 200
    }).addTo(mymap);    //lingkaran

    var polygon = L.polygon([
    [-5.36446, 105.240076],
    [-5.364524, 105.23941],
    [-5.363648, 105.239561],
    [-5.363626, 105.240204]
    ]).addTo(mymap);    //polygon
    
    var popup = L.popup()
        .setLatLng([-5.3928335, 105.2095938])
        .setContent("I am a standalone popup.")
        .openOn(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    } 
    mymap.on('click', onMapClick);  //menampilkan data coordinat saat di klik

    marker.bindPopup("<b>Unila</b><br>Universitas Lampung").openPopup();
    circle.bindPopup("Sepang Jaya.");
    polygon.bindPopup("Lapangan basket unila");
    
</script>

</html>