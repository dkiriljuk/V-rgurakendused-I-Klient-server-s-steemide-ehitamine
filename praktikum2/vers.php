<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$data = date('Y-m-d');
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$servername = "localhost";
	$username = "test";
	$password = "t3st3r123";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO brokan_aka_kiriljuk (ip, aeg) VALUES ('$ip', '$data')";
	$conn->query($sql);
	
	$sql2 = "Select * From brokan_aka_kiriljuk order by aeg Limit 10;";
	$result = $conn->query($sql2);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - IP: " . $row["ip"]. " AEG: " . $row["aeg"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	
	
	
	$conn->close();
	
	echo "<br>Current PHP version - " . phpversion() . "<br> Your ip - " . $_SERVER['REMOTE_ADDR'];
	
?>
