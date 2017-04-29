<?php
include('database/db.class.php');
include('class/Devices.class.php');
$devices = new Devices;
if(isset($_POST['select']) && $_POST['select'] == "true"){
        echo $devices->select();
}
if(isset($_POST['insert']) && $_POST['insert'] == "true"){
        echo $devices->insert();
}
if(isset($_GET['marker']) && $_GET['marker'] == "true"){
        echo $devices->markers();
}
if(isset($_GET['signout']) && $_GET['signout'] == "true"){
        session_destroy();
        unset($_SESSION);
        header("Location:login.php");
}
if(isset($_POST['login']) && $_POST['login'] == "true"){
        echo $devices->login();
}
?>
