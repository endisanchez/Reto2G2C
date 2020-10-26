<?php

$servername = "10.14.1.98:3306";
$username = "ivan";
$password = "zubiri1920";
$dbname = "tiendag2c";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//DB::select('SELECT id, nombre, descripcion, imagen, enlaces_videos FROM productos');



?>
