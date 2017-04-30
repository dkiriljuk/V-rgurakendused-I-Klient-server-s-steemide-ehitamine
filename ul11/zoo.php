<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Homework 11</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$host="localhost";
$user="test";
$pass="t3st3r123";
$db="test";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga");
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

$selecttable = "SELECT * FROM dkiriljuk_loomaaed";
$result = mysqli_query($connection, $selecttable);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr>";
    echo "<th>id</th>";
    echo "<th>nimi</th>";
    echo "<th>vanus</th>";
    echo "<th>liik</th>";
    echo "<th>puur</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nimi']."</td>";
        echo "<td>".$row['vanus']."</td>";
        echo "<td>".$row['liik']."</td>";
        echo "<td>".$row['puur']."</td>";
        echo "</tr>";
     }
    echo "</table>";
} else {
    echo "Table is empty";
}

echo "<p><b>Hankida kõigi mingis ühes kindlas puuris elavate loomade nimi ja puuri number</b></p>";
$q1 = mysqli_query($connection, "SELECT * FROM dkiriljuk_loomaaed WHERE puur='1'");
echo "<p>Puuris number 1 elavad: </p>";
while($row = $q1->fetch_assoc()) {
    echo $row['nimi']." ";
}
$q1 = mysqli_query($connection, "SELECT * FROM dkiriljuk_loomaaed WHERE puur='3'");
echo "<p>Puuris number 3 elavad: </p>";
while($row = $q1->fetch_assoc()) {
    echo $row['nimi']." ";
}
$q1 = mysqli_query($connection, "SELECT * FROM dkiriljuk_loomaaed WHERE puur='6'");
echo "<p>Puuris number 6 elavad: </p>";
while($row = $q1->fetch_assoc()) {
    echo $row['nimi']." ";
}




echo "<p><b>Hankida vanima ja noorima looma vanused</b></p>";
$q1=mysqlQuery("SELECT MAX(vanus) AS `max` FROM dkiriljuk_loomaaed");
$q2=mysqlQuery("SELECT MIN(vanus) AS `min` FROM dkiriljuk_loomaaed");
echo "<p>Vanim on ".$q1['max']."-aastane, ja noorim on ".$q2['min']."-aastane.</p>";

echo "<p><b>Hankida puuri number koos selles elavate loomade arvuga</b></p>";
$q1=mysqlQuery("SELECT COUNT(*) AS `count` FROM dkiriljuk_loomaaed WHERE puur='1'");
echo "<p>Puuris number 1 loomade arv on : ".$q1['count']."</p>";
$q1=mysqlQuery("SELECT COUNT(*) AS `count` FROM dkiriljuk_loomaaed WHERE puur='3'");
echo "<p>Puuris number 3 loomade arv on : ".$q1['count']."</p>";
$q1=mysqlQuery("SELECT COUNT(*) AS `count` FROM dkiriljuk_loomaaed WHERE puur='6'");
echo "<p>Puuris number 6 loomade arv on : ".$q1['count']."</p>";
$q1=mysqlQuery("SELECT COUNT(*) AS `count` FROM dkiriljuk_loomaaed WHERE puur='7'");
echo "<p>Puuris number 7 loomade arv on : ".$q1['count']."</p>";
$q1=mysqlQuery("SELECT COUNT(*) AS `count` FROM dkiriljuk_loomaaed WHERE puur='11'");
echo "<p>Puuris number 11 loomade arv on : ".$q1['count']."</p>";
    mysqli_close($connection);

function mysqlQuery($query) {
    $result = mysqli_query($GLOBALS['connection'], $query);
    return $result->fetch_assoc();
}

?>
<form method="post" action="refresh.php">
<button type="submit" formaction="refresh.php">Suurendada kõiki tabelis olevaid vanuseid 1 aasta võrra</button>
</form>
<form method="post" action="refresh2.php">
    <button type="submit" formaction="refresh2.php">Vähendada kõiki tabelis olevaid vanuseid 1 aasta võrra</button>
</form>
</body>
</html>
