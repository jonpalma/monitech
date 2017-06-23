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
		scrollwheel: true
	};

	map = new google.maps.Map(map_canvas, map_options);

	var markerChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng(28.673725, -106.076890),
		map: map,
		title: 'ITESM Campus Chihuahua'
	});

	var markerGuadalajara = new google.maps.Marker({
		position: new google.maps.LatLng(20.614193, -103.385168),
		map: map,
		title: 'CRIT Occidente'
	});

	var markerMonterrey = new google.maps.Marker({
		position: new google.maps.LatLng(25.651517, -100.289637),
		map: map,
		title: 'ITESM Campus Monterrey'
	});

	var markerCdMexico = new google.maps.Marker({
		position: new google.maps.LatLng(19.327963, -99.069105),
		map: map,
		title: 'CRIT Ciudad de México'
	});

	var markerSanLuisPotosi = new google.maps.Marker({
		position: new google.maps.LatLng(21.989511, -100.856157),
		map: map,
		title: "L'Oréal Paris - San Luis Potosí"
	});
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