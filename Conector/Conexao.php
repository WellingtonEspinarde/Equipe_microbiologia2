<?php

$hostname = "localhost";
$bancodedados = "usuario"
$usuario = "root";
$senha = "";

$conect = new mysqli($hostname , $bancodedados, $usuario, $senha);


if ($conect ->connect_errno ){
    echo "Falha ao conectar!";

}else{
    echo " Conexão Bem Sucedida!"
}


?>