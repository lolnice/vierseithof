var styleOptions = {
	name: "Dummy Style"
};

var map_style = [
	{
		featureType: "road",
		elementType: "all",
		stylers: [
			{ visibility: "on" }
		]
	}
];

function initialize() {
	
	var mapOptions = {
		zoom: 12,
		disableDefaultUI: true,
		center: new google.maps.LatLng(51.88677, 13.377228),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	map = new google.maps.Map(document.getElementById("map_canvas"),
mapOptions);

	var mapType = new google.maps.StyledMapType(map_style, styleOptions);
	map.mapTypes.set("Dummy Style", mapType);
	map.setMapTypeId("Dummy Style");
	
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(51.88677, 13.377228),
		map: map,
		title: "Vierseithof"
	});
	

}

google.maps.event.addDomListener(window, 'load', initialize);