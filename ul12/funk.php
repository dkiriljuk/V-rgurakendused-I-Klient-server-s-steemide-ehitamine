<?php

function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function logi(){

	include_once('views/login.html');
}

function logout(){
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function kuva_puurid(){

	global $connection;
	$puurid = array();

	global $connection;
	$distinct_puur = "SELECT DISTINCT puur FROM dkiriljukAK11_loomaaed ORDER BY puur ASC";
	$result = mysqli_query($connection, $distinct_puur);
	while($row = $result->fetch_assoc()) {

		$select_puur = "SELECT * FROM dkiriljukAK11_loomaaed WHERE  puur=".$row['puur'];
		$result2 = mysqli_query($connection, $select_puur);

		while ($row2 = $result2->fetch_assoc()) {
			$puurid[$row['puur']][]=$row2;
		}
	}

	include_once('views/puurid.html');
	
}

function lisa(){
	
	include_once('views/loomavorm.html');
	
}

function upload($name){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$allowedTypes = array("image/gif", "image/jpeg", "image/png","image/pjpeg");
	$extension = end(explode(".", $_FILES[$name]["name"]));

	if ( in_array($_FILES[$name]["type"], $allowedTypes)
		&& ($_FILES[$name]["size"] < 100000)
		&& in_array($extension, $allowedExts)) {
		if ($_FILES[$name]["error"] > 0) {
			$_SESSION['notices'][]= "Return Code: " . $_FILES[$name]["error"];
			return "";
		} else {
			if (file_exists("pildid/" . $_FILES[$name]["name"])) {
				$_SESSION['notices'][]= $_FILES[$name]["name"] . " juba eksisteerib. ";
				return "pildid/" .$_FILES[$name]["name"];
			} else {
				move_uploaded_file($_FILES[$name]["tmp_name"], "pildid/" . $_FILES[$name]["name"]);
				return "pildid/" .$_FILES[$name]["name"];
			}
		}
	} else {
		return "";
	}
}

?>