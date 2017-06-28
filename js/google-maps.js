var map;
$(document).ready(function () {
    google.maps.event.addDomListener(window, 'load', initialize);
});


function initialize() {
    var map_canvas = document.getElementById('googleMap');

    var map_options = {
        center: new google.maps.LatLng(23.583729, -102.307294),
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    map = new google.maps.Map(map_canvas, map_options);

    var iconBase = 'img/icons/';
    var icons = {
        down: {
            icon: iconBase + 'server-red.png'
        },
        up: {
            icon: iconBase + 'server-green.png'
        }
    };

    function addMarker(feature) {
        var marker = new google.maps.Marker({
            position: feature.position,
            title: feature.title,
            icon: icons[feature.type].icon,
            map: map
        });
    }

    var features = [
        {
            position: new google.maps.LatLng(28.673725, -106.076890),
            title: 'ITESM Campus Chihuahua',
            type: 'down'
        }, {
            position: new google.maps.LatLng(20.614193, -103.385168),
            title: 'CRIT Occidente',
            type: 'up'
        }, {
            position: new google.maps.LatLng(25.651517, -100.289637),
            title: 'ITESM Campus Monterrey',
            type: 'up'
        }, {
            position: new google.maps.LatLng(19.327963, -99.069105),
            title: 'CRIT Ciudad de México',
            type: 'down'
        }, {
            position: new google.maps.LatLng(21.989511, -100.856157),
            title: "L'Oréal Paris - San Luis Potosí",
            type: 'up'
        }
    ];

    for (var i = 0, feature; feature = features[i]; i++) {
        addMarker(feature);
    }
}


function moveToChihuahua() {
    map.panTo(new google.maps.LatLng(28.673725, -106.076890));
}

function moveToGuadalajara() {
    map.panTo(new google.maps.LatLng(20.614193, -103.385168));
}

function moveToMonterrey() {
    map.panTo(new google.maps.LatLng(25.651517, -100.289637));
}

function moveToCdMexico() {
    map.panTo(new google.maps.LatLng(19.327963, -99.069105));
}

function moveToSanLuisPotosi() {
    map.panTo(new google.maps.LatLng(21.989511, -100.856157));
}