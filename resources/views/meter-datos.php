<?php

include("conexionBD.php");


$sql = "INSERT INTO productos (nombre, descripcion, imagen, enlaces_videos)
		VALUES ('$_POST[nombre]', '$_POST[descripcion]', '$_POST[imagen]', '$_POST[enlaces_videos]')";

$result = $conn->query($sql);

echo $sql;

mysqli_close($conn);

header('location: index.php');

?>