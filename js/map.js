(function() {
	var map = new google.maps.Map(document.querySelector('.map-wrapper')),
		preloader = document.querySelector('.preload-wrapper'),
		
		//import the geocode API
		geocoder = new google.maps.Geocoder(),
		geocodeButton = document.querySelector('.geocode'),
		
		//directions display
		directionsService = new google.maps.DirectionsService(),
		directionsDisplay,
		locations = [],
		
		marker;

	
	function initMap(position) {
		var image = "images/pin.svg";

		//save our position
		locations[0] = { lat: 44.500145, lng: -81.373168 };
		
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);
		
		map.setCenter({ lat: 44.500145, lng: -81.373168 });
		map.setZoom(15);
		
		marker = new google.maps.Marker({
			position : { lat: 44.500145, lng: -81.373168 },
			animation: google.maps.Animation.DROP,
			map: map,
			icon: image,
			title: "Hello World!"
		});
		
		preloader.classList.add('hide-preloader');
	}
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
		}else {
			console.log('Something has gone wrong.');
	}
		
	function handleError() {
		console.log('Something has gone wrong.');
	}
	
	function codeAddress() {

		var address = document.querySelector('#yourAddress').value;
		
		geocoder.geocode({ 'address' : address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				// push location into array
				locations[1] = { lat: results[0].geometry.location.lat(),
								 lng: results[0].geometry.location.lng()
							   }
				
				map.setCenter(results[0].geometry.location);
				
				if (marker) {
					marker.setMap(null);
					
					calcRoute(results[0].geometry.location);
					
				}else {
					console.log('Geocode was not successful for the following reasons: ', status);
				}
			}
		})
	}
	
	function calcRoute(codeLoc) {
		var request = {
			origin: locations[1],
			destination: locations[0],
			travelMode: 'DRIVING'
  		}
		
		directionsService.route(request, function(response, status) {
			if (status == 'OK') {
				directionsDisplay.setDirections(response);
			}
		});
	}
	
	geocodeButton.addEventListener('click', codeAddress, false);
	
})();