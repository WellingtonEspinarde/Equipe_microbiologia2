<?php

include '../dao/ConnectionFactory.php';
include '../dao/ProfessorDao.php';
include '../model/Professor.php';

$professor = new Professor();
$professorDao = new ProfessorDao();

if(isset($_POST['cadastrar'])){
    $professor->setNome($_POST['nome']);
    $professor->setId($_POST['id']);
    $professor->setRgm($_POST['rgm']);
    $professor->setemail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professorDao->inserir($professor);
    header("Location: ../index.php");
}



?>


