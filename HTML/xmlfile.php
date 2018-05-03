<?php

header('Content-Type: text/xml');

echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "naivedya";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {
		//echo 'connected';
	}
	
	$f_id = $_GET['f_id'];
	$c_id = $_GET['c_id'];
	
	//echo $f_id;
	
	/*
	$f_id = 10;
	$c_id = 2;
	*/
	$sql = "SELECT * FROM menu_detail WHERE category_id = $c_id AND food_id = $f_id";

	$result = $conn->query($sql);

	$img_url = null;

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
			/*
			echo "<BR><BR>";
			
			echo $row["description"];
			
			echo '<BR><BR>';
			
			echo $row["food_name"];
			
			echo '<BR><BR>';
			
			echo $row["category_id"];
			
			echo '<BR><BR>';
			
			echo $row["food_id"];
			
			echo '<BR><BR>';
			*/
			echo '<imageaddress>';
			echo $row["image_address"];	
			echo '</imageaddress>';
			
			echo '<description>';
			echo $row["description"];	
			echo '</description>';
			
		}
	} else {
		echo "0 results";
	}
	$conn->close();

echo "</response>";



?>