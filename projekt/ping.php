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
$database = new db(); 
$Data = $database->getALL("SELECT * FROM devices");
    foreach($Data as $data) {
        $ip = $data['ip'];
        pingAddress($ip);
    }
        

function pingAddress($ip) {
    $pingresult = exec("/bin/ping -c1 -w1 $ip", $outcome, $status);
    if (0 == $status) {
        $status = "alive";
        $database = new db();
        $data = $database->getOne("SELECT * FROM devices WHERE ip = '$ip'");
        $id = $data['id'];
        $state = $data['state'];
        if($status != $state or $state != $status){
        	$update = $database->execute("UPDATE devices SET state = '$status' WHERE id = '$id'");
        }
    } else {
        $status = "dead";
        $database = new db();
        $data = $database->getOne("SELECT * FROM devices WHERE ip = '$ip'");
        $id = $data['id'];
        $state = $data['state'];
        if($status != $state or $state != $status){
        	$update = $database->execute("UPDATE devices SET state = '$status' WHERE id = '$id'");
        }
        
    }
}	
?>