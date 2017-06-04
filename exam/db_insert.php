<?php
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa uhendust mootoriga");
	$comment = $_POST['comment'];
    $name = $_POST['name'];
    $sql = "INSERT INTO dkiriljuk_exam (name, comment) VALUES ('$name', '$comment')";
    if (mysqli_query($connection, $sql)) {
    	echo "success";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "SELECT id, firstname, lastname FROM MyGuests";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
	} else {
    	echo "0 results";
	}

	mysqli_close($connection);
?>
