<?php

$hostname = "localhost";
$bancodedados = "bandodedados" //alterar para o banco de dados ;
$usuario = "root";
$senha = "";

$mysql = new mysqli($hostname , $usuario, $senha, $bancodedados);
if ($mysqli ->connect_errno ){
    echo "Falha ao conencatar (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>