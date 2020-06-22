<?php
	include "server.php";
	$location = getPosition();
?>


<!doctype html>
<html lang="en">
	<head>
	  <title>Traccar API Test MAP</title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

		<style type="text/css">
			#map {
				position: absolute;
				left: 0;
				right: 0;
				height: 80%;
			}

			#title {
				color: #0FA400;
				height: 10%;
			}

			#menu {
				position: fixed;
				height: 10%;
		    bottom: 0;
		    width: 100%;


			}

			.button {
				background-color: #0FA400;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}
</style>
		</style>
	</head>

	<body>
		<h3 id="title">Traccar API Test Map</h3>
		<div id="map"></div>
		<script type="text/javascript">
			var map = L.map('map').setView([ <?php echo $location[0] ?>, <?php echo $location[1] ?>], 20);

			L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=<your_api_key>', {
				attribution : '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
			}).addTo(map);

			var marker = L.marker([<?php echo $location[0] ?>, <?php echo $location[1] ?>]).addTo(map);
		</script>
		<div id="menu">
			<button class="button" onclick="location.reload();">Update Location</button>
			<button class="button" onclick="getapi();">Show API</button>
			<script>
				function getapi()
				{
					alert	("GET http://traccar_server/api/positions/<device_id>");
				}
			</script>
		</div>
	</body>

</html>
