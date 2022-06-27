<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "webshop";

//connect to database   
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connection_error);
// }
// echo "Gefeliciteerd pik! Hij doet het!!";