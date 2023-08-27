<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		#map {
			height: 370px;
			width: 96%;
			border: solid 2px red;
		}
	</style>
</head>
<body>
	<div class="Harita">
		<h1>Konum Haritası</h1>
		<!-- Harita görüntüsünün geleceği yer -->
		<div id="map"></div>
		
		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
		$query = "SELECT * FROM mahallar WHERE İlce = 'ADALAR';";
		$result = mysqli_query($conn, $query);

		if ($result) {
			// Sorgu başarılı ise fetch işlemi yap
			while ($row = mysqli_fetch_assoc($result)) {
				$latitude = $row["POINT_Y"];
				$longitude = $row["POINT_X"];
			}
		} else {
			echo "Sorgu çalıştırılamadı: " . mysqli_error($conn);
		}
		?>
		
		<script>
			// Enlem ve boylam bilgileri
			const latitude = <?php echo $latitude; ?>;
			const longitude = <?php echo $longitude; ?>;
			
			function initMap() {
				// Harita görüntüsünü oluşturma
				const map = new google.maps.Map(document.getElementById("map"), {
					center: { lat: latitude, lng: longitude },
					zoom: 18, // Yakınlaştırma seviyesi
				});
	
				// İşaretçi (marker) oluşturma
				const marker = new google.maps.Marker({
					position: { lat: latitude, lng: longitude },
					map: map,
					title: "Konum İşareti",
				});
			}
		</script>
		<!-- Google Haritalar API betiği -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBYyqb2XSJ3BrU8WzwhHxUmXFx1ebdbso&callback=initMap" async defer></script>
	</div>
</body>
</html>
