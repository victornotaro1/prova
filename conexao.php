<?php

$servername = "localhost";
$username = "root";
$password = "";  
$database = "login";
$port = 3308;


$conn = mysqli_connect($servername, $username, $password, $database, $port);


if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
