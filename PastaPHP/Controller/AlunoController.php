<?php

include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/AlunoDao.php';
include __DIR__. '/../model/Aluno.php';



if(isset($_POST['cadastrar'])){
    $aluno->setCurso($_POST['curso']);
    $aluno->setAnoeLetivo($_POST['anoletivo']);
    $alunoDao->inserir($aluno);
    header("Location: ../index.php");
}

if($_SERVER["REQUEST_METHOD"]== "GET"){
    ConnectionFactory::getConnection();
}
?>

