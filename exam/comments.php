<?php
$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa uhendust mootoriga");
	$sql3 = "SELECT comment FROM dkiriljuk_exam";
	$result = mysqli_query($connection, $sql3);

	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $comment = $row["comment"] . "</br>";
        echo $comment;
    }
	} else {
    	echo "0 results";
	}
?>