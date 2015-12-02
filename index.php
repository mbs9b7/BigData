<html>
	<head>

	</head>
	<body>
		Please select the average temperature you are looking for:
		<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
		<select name="temper">
			<option value="60"> 60 </option>
			<option value="65" selected> 65 </option>
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
				$sql = "SELECT * FROM test2";
				$result = $conn->query($sql);
				$chosenTemp = $_POST['temper'];

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        if($row["id"] == $chosenTemp)
				        {
				        	echo "Longitude: " . $row["lon"] . "<br>Latitude: " . $row["lat"] . "<br>";
				        }
				        echo "id: " . $row["id"]. "<br>";
				    }
				} else {
				    echo "0 results";
				}
			}
			$conn->close();
		?>
	<body>
</html>