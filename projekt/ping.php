<?php
function pingAddress($ip) {
    $pingresult = exec("/bin/ping -c 4 $ip", $outcome, $status);
    if (0 == $status) {
        $status = "alive";
    } else {
        $status = "dead";
    }
    echo "The IP address, $ip, is  ".$status;
}

pingAddress("8.8.4.4");
?>