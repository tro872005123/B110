<?php
$hostname="localhost";
$usenamer= "root";
$password= "";
$dbname= "golden_city";
//creating datasource name

$dns= "mysql:host=$hostname; dbname=$dbname";
try {
$conn = new PDO($hostname, $username, $password);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
    echo "connection get";
}catch(PDOException $e) {
    echo $e->getMessage();
}

?>