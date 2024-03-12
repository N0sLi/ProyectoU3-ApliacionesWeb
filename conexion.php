<?php
$servername = "localhost";
$username = "wrami";
$password = "wrami123";
$dbname = "BDusuario";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}