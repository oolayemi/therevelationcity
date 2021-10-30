var google;

function init() {
    var myLatlng = new google.maps.LatLng(53.400502410233855, -113.59061337004707);
    var mapOptions = {
        zoom: 17,
        center: myLatlng,
        scrollwheel: true,
        styles: [{"featureType": "administrative.country", "elementType": "geometry", "stylers": [{"visibility": "simplified"}, {"hue": "#ff0000"}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    const marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
    });

    // var addresses = ['#205, 8311 Chappelle Way SW, Edmonton AB, Canada T6W3Y8'];
    // for (var x = 0; x < addresses.length; x++) {
    //     $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + addresses[x] + '&sensor=false', null, function (data) {
    //         var p = data.results[0].geometry.location
    //         var latlng = new google.maps.LatLng(p.lat, p.lng);
    //         new google.maps.Marker({position: latlng, map: map, icon: 'images/loc.png'});
    //     });
    // }
}

google.maps.event.addDomListener(window, 'load', init);
