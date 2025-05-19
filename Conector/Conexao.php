<?php

$hostname = "localhost";
$bancodedados = "usuario"
$usuario = "root";
$senha = "";

$mysql = new mysqli($hostname , $usuario, $senha, $bancodedados);
if ($mysqli ->connect_errno ){
    echo "Falha ao conencatar (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>