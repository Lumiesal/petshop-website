<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "petshop";

    $conexion = mysqli_connect($servername, $username, $password, $database);
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }
    echo $conexion->host_info . "\n";
?>