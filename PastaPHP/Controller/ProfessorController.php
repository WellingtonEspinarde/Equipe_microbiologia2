<?php

include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/ProfessorDao.php';
include __DIR__. '/../model/Professor.php';

$professor = new Professor();
$professorDao = new ProfessorDao;


<<<<<<< HEAD
=======
$professor = new Professor();
$professorDao = new ProfessorDao;
>>>>>>> c665bc97b6c8cfa4c61cc0029beb7c17b1dbf13b

if(isset($_POST['cadastrar'])){
    $professor->setNome($_POST['nome']);
    $professor->setCpf($_POST['cpf']);
    $professor->setemail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professorDao->inserir($professor);
    header("Location: ../index.php");
}

if($_SERVER["REQUEST_METHOD"]== "GET"){
    ConnectionFactory::getConnection();
}
?>


