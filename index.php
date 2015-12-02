<html>
	<head>
		 <style type="text/css">
      		html, body { height: 100%; margin: 0; padding: 0; }
     		 #map { height: 75%; }
   		</style>
    	 
	</head>
	<body>
		Please select the average temperature you are looking for:
		<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
		<select name="temper">
			<option value="60"> 60 </option>
			<option value="65"> 65 </option>
			<option value="70"> 70 </option>
			<option value="75"> 75 </option>
			<option value="80"> 80 </option>
		</select>
		<input type="submit" vaule="Execute" name="Execute"/>
		</form>
		<?php
			include("../secure/database.php");
			$conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			if(isset($_POST['Execute'])==TRUE)
			{
				$sql = "SELECT * FROM test3";
				$result = $conn->query($sql);
				$chosenTemp = $_POST['temper'];

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        if($row["id"] == $chosenTemp)
				        {
				        	$lat = $row["lat"];
				        	$lon = $row["lon"];
				        	
				        	echo "<script>
								var map;
								function initMap() {
  								map = new google.maps.Map(document.getElementById('map'), {
    							center: {lat: ".$lat.", lng: ".$lon."},
  				  				zoom: 8
  								});
								}
						    	</script>";
				        	echo '<script async defer 
				        	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCym7xb1j_WoYOuD_qLjSQ-HbtxGNCv22A&callback=initMap"></script>';
				        	echo "<div id='map'></div>";
				        }
				    }
				} else {
				    echo "0 results";
				}
			}
			$conn->close();
		?>
		<div id='map'></div>

   		
		
	<body>
</html>