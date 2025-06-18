<?php

include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/ProfessorDao.php';
include __DIR__. '/../model/Professor.php';

$professor = new Professor();
$professorDao = new ProfessorDao();

if(isset($_POST['Cadastrar'])){
    $professor->setNome($_POST['nome']);
    $professor->setCpf($_POST['cpf']);
    $professor->setEmail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professor->setAnoLetivo($_POST['anoletivo']);
    $professor->setCargo($_POST['cargo']);

    $professorDao->inserir($professor);

    header("Location: ../Views/index.php");
    
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    ConnectionFactory::getConnection();
}

?>




