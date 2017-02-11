<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
<title>Dmitri Kiriljuk</title>
</head>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
</script>
</head>
<body onload="startTime()">

<h1>My First Page</h1>
<p>Linux is the main OP system</p>
<img src="Linux.jpg" alt="Linux" style="width:304px;height:228px;"><br>
<?php
echo 'Current PHP version: ' . phpversion();
?>
<br>
<div id="time" style="font-family: 'Orbitron', sans-serif; color:red"></div>
</body>
</html>
