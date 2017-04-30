<?php
$host="localhost";
$user="test";
$pass="t3st3r123";
$db="test";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga");
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
mysqli_query($connection, "UPDATE dkiriljuk_loomaaed SET vanus=vanus-1");
mysqli_close($connection);
header("Refresh:0; url=zoo.php");
?>