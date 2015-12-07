<html>
	<head>
		 <style type="text/css">
      		html, body { height: 100%; margin: 0; padding: 0; }
     		 #map { height: 95%; }
   		</style>
    	 <script>
			var map;
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
		  			center: {lat: 40, lng: 0}
		  			zoom: 3
					});
			}
		</script>
	</head>
	<body>
		Please select the average temperature you are looking for:
		<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
		<select name="temper">
			<option value="-55"> -55 </option>
			<option value="-50"> -50 </option>
			<option value="-45"> -45 </option>
			<option value="-40"> -40 </option>
			<option value="-35"> -35 </option>
			<option value="-30"> -30 </option>
			<option value="-25"> -25 </option>
			<option value="-20"> -20 </option>
			<option value="-15"> -15 </option>
			<option value="-10"> -10 </option>
			<option value="-5"> -5 </option>
			<option value="0" selected> 0 </option>
			<option value="1"> 1 </option>
			<option value="2"> 2 </option>
			<option value="3"> 3 </option>
			<option value="4"> 4 </option>
			<option value="5"> 5 </option>
			<option value="6"> 6 </option>
			<option value="7"> 7 </option>
			<option value="8"> 8 </option>
			<option value="9"> 9 </option>
			<option value="10"> 10 </option>
			<option value="11"> 11 </option>
			<option value="12"> 12 </option>
			<option value="13"> 13 </option>
			<option value="14"> 14 </option>
			<option value="15"> 15 </option>
			<option value="16"> 16 </option>
			<option value="17"> 17 </option>
			<option value="18"> 18 </option>
			<option value="19"> 19 </option>
			<option value="20"> 20 </option>
			<option value="21"> 21 </option>
			<option value="22"> 22 </option>
			<option value="23"> 23 </option>
			<option value="24"> 24 </option>
			<option value="25"> 25 </option>
			<option value="26"> 26 </option>
			<option value="27"> 27 </option>
			<option value="28"> 28 </option>
			<option value="29"> 29 </option>
			<option value="30"> 30 </option>
		</select>
		<input type="submit" vaule="ExecuteAvg" name="ExecuteAvg"/>
		</form>
		Select a Range you are looking for:
		<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
		<select name="min">
			<option value="-70"> -70 </option>
			<option value="-65"> -65 </option>
			<option value="-60"> -60 </option>
			<option value="-55"> -55 </option>
			<option value="-50"> -50 </option>
			<option value="-45"> -45 </option>
			<option value="-40"> -40 </option>
			<option value="-35"> -35 </option>
			<option value="-30"> -30 </option>
			<option value="-25"> -25 </option>
			<option value="-20"> -20 </option>
			<option value="-15"> -15 </option>
			<option value="-10"> -10 </option>
			<option value="-5"> -5 </option>
			<option value="0" selected> 0 </option>
			<option value="1"> 1 </option>
			<option value="2"> 2 </option>
			<option value="3"> 3 </option>
			<option value="4"> 4 </option>
			<option value="5"> 5 </option>
			<option value="6"> 6 </option>
			<option value="7"> 7 </option>
			<option value="8"> 8 </option>
			<option value="9"> 9 </option>
			<option value="10"> 10 </option>
			<option value="11"> 11 </option>
			<option value="12"> 12 </option>
			<option value="13"> 13 </option>
			<option value="14"> 14 </option>
			<option value="15"> 15 </option>
			<option value="16"> 16 </option>
			<option value="17"> 17 </option>
			<option value="18"> 18 </option>
			<option value="19"> 19 </option>
			<option value="20"> 20 </option>
			<option value="21"> 21 </option>
			<option value="22"> 22 </option>
			<option value="23"> 23 </option>
			<option value="24"> 24 </option>
			<option value="25"> 25 </option>
			<option value="26"> 26 </option>
			<option value="27"> 27 </option>
			<option value="28"> 28 </option>
			<option value="29"> 29 </option>
			<option value="30"> 30 </option>
		</select>
				<select name="max">
			<option value="-70"> -70 </option>
			<option value="-65"> -65 </option>
			<option value="-60"> -60 </option>
			<option value="-55"> -55 </option>
			<option value="-50"> -50 </option>
			<option value="-45"> -45 </option>
			<option value="-40"> -40 </option>
			<option value="-35"> -35 </option>
			<option value="-30"> -30 </option>
			<option value="-25"> -25 </option>
			<option value="-20"> -20 </option>
			<option value="-15"> -15 </option>
			<option value="-10"> -10 </option>
			<option value="-5"> -5 </option>
			<option value="0" selected> 0 </option>
			<option value="1"> 1 </option>
			<option value="2"> 2 </option>
			<option value="3"> 3 </option>
			<option value="4"> 4 </option>
			<option value="5"> 5 </option>
			<option value="6"> 6 </option>
			<option value="7"> 7 </option>
			<option value="8"> 8 </option>
			<option value="9"> 9 </option>
			<option value="10"> 10 </option>
			<option value="11"> 11 </option>
			<option value="12"> 12 </option>
			<option value="13"> 13 </option>
			<option value="14"> 14 </option>
			<option value="15"> 15 </option>
			<option value="16"> 16 </option>
			<option value="17"> 17 </option>
			<option value="18"> 18 </option>
			<option value="19"> 19 </option>
			<option value="20"> 20 </option>
			<option value="21"> 21 </option>
			<option value="22"> 22 </option>
			<option value="23"> 23 </option>
			<option value="24"> 24 </option>
			<option value="25"> 25 </option>
			<option value="26"> 26 </option>
			<option value="27"> 27 </option>
			<option value="28"> 28 </option>
			<option value="29"> 29 </option>
			<option value="30"> 30 </option>
		</select>
		<input type="submit" vaule="Average in Range" name="ExecuteMinMax"/>
		<input type="submit" value="No Month Outside of Range" name="ExecuteMinMaxOnly"/>
		</form>
		<div id='map' hidden="1"></div>


		<?php
			include("../secure/database.php");
			$conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			if(isset($_POST['ExecuteAvg'])==TRUE)
			{
				$sql = "SELECT * FROM air_temp";
				$result = $conn->query($sql);
				$chosenTemp = $_POST['temper'];

				if ($result->num_rows > 0) {
					echo "<script>document.getElementById('map').hidden = false</script>";
				  	echo "<script>
								var map;
								function initMap() {
  								map = new google.maps.Map(document.getElementById('map'), {
    							center: {lat: 0, lng: 0},
  				  				zoom: 3
  								});";
								
						$num = 0;
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        
				        if((($row["jan"]+$row["feb"]+$row["march"]+$row["april"]+$row["may"]+$row["june"]+$row["july"]+$row["aug"]+$row["sept"]+$row["oct"]+$row["nov"]+$row["decm"])/12) == $chosenTemp)
				        {
				        	$lat = $row["latitude"];
				        	$lon = $row["longititude"];
				        	$latLng = "{lat: ".$lat.", lng: ".$lon."}";
				        echo "
								var marker".$num." = new google.maps.Marker({
  								position: ". $latLng. ",
    							map: map,
    							title: 'Hello World!'
    							});";
								$num=$num +1;
				        }

				    }
				     echo '}</script><script async defer 
				        	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCym7xb1j_WoYOuD_qLjSQ-HbtxGNCv22A&callback=initMap"></script>';
				   
				} else {
				    echo "0 results";
				}
			}


			if(isset($_POST['ExecuteMinMax'])==TRUE)
			{
				$sql = "SELECT * FROM air_temp";
				$result = $conn->query($sql);
				$minTemp = $_POST['min'];
				$maxTemp = $_POST['max'];

				if ($result->num_rows > 0) {
					echo "<script>document.getElementById('map').hidden = false</script>";
				  	echo "<script>
								var map;
								function initMap() {
  								map = new google.maps.Map(document.getElementById('map'), {
    							center: {lat: 0, lng: 0},
  				  				zoom: 3
  								});";
								
						$num = 0;
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        
				        if((($row["jan"]+$row["feb"]+$row["march"]+$row["april"]+$row["may"]+$row["june"]+$row["july"]+$row["aug"]+$row["sept"]+$row["oct"]+$row["nov"]+$row["decm"])/12) <= $maxTemp && (($row["jan"]+$row["feb"]+$row["march"]+$row["april"]+$row["may"]+$row["june"]+$row["july"]+$row["aug"]+$row["sept"]+$row["oct"]+$row["nov"]+$row["decm"])/12) >= $minTemp)
				        {
				        	$lat = $row["latitude"];
				        	$lon = $row["longititude"];
				        	$latLng = "{lat: ".$lat.", lng: ".$lon."}";
				        echo "
								var marker".$num." = new google.maps.Marker({
  								position: ". $latLng. ",
    							map: map,
    							title: 'Hello World!'
    							});";
								$num=$num +1;
				        }

				    }
				     echo '}</script><script async defer 
				        	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCym7xb1j_WoYOuD_qLjSQ-HbtxGNCv22A&callback=initMap"></script>';
				   
				} else {
				    echo "0 results";
				}
			}

			if(isset($_POST['ExecuteMinMaxOnly'])==TRUE)
			{
				$sql = "SELECT * FROM air_temp";
				$result = $conn->query($sql);
				$minTemp = $_POST['min'];
				$maxTemp = $_POST['max'];

				if ($result->num_rows > 0) {
					echo "<script>document.getElementById('map').hidden = false</script>";
				  	echo "<script>
								var map;
								function initMap() {
  								map = new google.maps.Map(document.getElementById('map'), {
    							center: {lat: 0, lng: 0},
  				  				zoom: 3
  								});";
								
						$num = 0;
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        
				        if($row["jan"] <= $maxTemp && $row["feb"] <= $maxTemp && $row["march"] <= $maxTemp && $row["april"] <= $maxTemp && $row["may"] <= $maxTemp && $row["june"] <= $maxTemp && $row["july"] <= $maxTemp && $row["aug"] <= $maxTemp && $row["sept"] <= $maxTemp && $row["oct"] <= $maxTemp && $row["nov"] <= $maxTemp && $row["decm"] <= $maxTemp && $row["jan"] >= $minTemp && $row["feb"] >= $minTemp && $row["march"] >= $minTemp && $row["april"] >= $minTemp && $row["may"] >= $minTemp && $row["june"] >= $minTemp && $row["july"] >= $minTemp && $row["aug"] >= $minTemp && $row["sept"] >= $minTemp && $row["oct"] >= $minTemp && $row["nov"] >= $minTemp && $row["decm"] >= $minTemp)
				        {
				        	$lat = $row["latitude"];
				        	$lon = $row["longititude"];
				        	$latLng = "{lat: ".$lat.", lng: ".$lon."}";
				        echo "
								var marker".$num." = new google.maps.Marker({
  								position: ". $latLng. ",
    							map: map,
    							title: 'Hello World!'
    							});";
								$num=$num +1;
				        }

				    }
				     echo '}</script><script async defer 
				        	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCym7xb1j_WoYOuD_qLjSQ-HbtxGNCv22A&callback=initMap"></script>';
				   
				} else {
				    echo "0 results";
				}
			}

			$conn->close();
		?>

		
		

   		
		
	<body>
</html>