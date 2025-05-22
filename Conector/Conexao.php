<?php

$hostname = "localhost";
$bancodedados = "usuario"
$usuario = "root";
$senha = "";

$conect = new mysqli($hostname , $usuario, $senha, $bancodedados);


if ($conect ->connect_errno ){
    echo "Falha ao conectar!";

}else{
    echo " Conexão Bem Sucedida!"
}


?>