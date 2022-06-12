
{mapboxgl.accessToken = 'pk.eyJ1IjoibmF0c29iIiwiYSI6ImNrd3RhNG9tZzFlY3kycHFvbmQ1eWpzYmsifQ.Pp2qaAbUnJQYE3T88mXgqA';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-0.2410, 51.75175], 
    zoom: 13 
})
const marker = new mapboxgl.Marker({ color: 'red', rotation: 45 })
.setLngLat([-0.2410, 51.75175])
.addTo(map);

};

//geolocation function
function geoFindMe() {
	  if (!navigator.geolocation){
		output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
		return;
	  }	

	  const output = document.getElementById("out");	 

	  function success(position) {
		const latitude  = position.coords.latitude;  
		const longitude = position.coords.longitude;

	output.innerHTML = '<p>You are here</p>';
	displayMap2(longitude, latitude);
	  };

	  function error() {
	  output.innerHTML = "Unable to retrieve your location";
	  };

	  output.innerHTML = "<p>Locating…</p>";

	  navigator.geolocation.getCurrentPosition(success, error);
}

function displayMap2(lng, lat)
	{
mapboxgl.accessToken = 'pk.eyJ1IjoibW0xOGFmdiIsImEiOiJja3Z4MWYzMWwzdWFpMndrbDVoa3RsZm54In0.0x-Eb8iv8cFupFNT1xpfnA';
const map = new mapboxgl.Map({
container: 'map', 
style: 'mapbox://styles/mapbox/streets-v11', 
center: [lng, lat], 
zoom: 13 
});

const marker2 = new mapboxgl.Marker({ color: 'blue', rotation: 45 })
.setLngLat([lng, lat])
.addTo(map);
} 

