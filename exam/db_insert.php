<?php
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa uhendust mootoriga");
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO dkiriljuk_exam (name, comment) VALUES ('$name', '$comment')";
    if (mysqli_query($connection, $sql)) {
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql2 = "SELECT id FROM dkiriljuk_exam";
	$result = mysqli_query($connection, $sql2);

	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
    }
	} else {
    	echo "0 results";
	}
	echo $id;	

	mysqli_close($connection);
?>
