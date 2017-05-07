<?php
if(!isset($_SESSION))
    {
      session_start();
    }
    if ($_SESSION['id'] == null) {
      session_destroy();
      header("Location: login.php");
    }
include('database/db.class.php');
include('class/Devices.class.php');
$devices = new Devices;
if(isset($_GET['select']) && $_GET['select'] == "true"){
        echo $devices->select();
}
if(isset($_POST['insert']) && $_POST['insert'] == "true"){
        echo $devices->insert();
}
if(isset($_GET['marker']) && $_GET['marker'] == "true"){
        echo $devices->markers();
}
if(isset($_GET['signout']) && $_GET['signout'] == "true"){
		session_start();
		session_unset();
        session_destroy();
        header("Location:login.php");
}
?>
