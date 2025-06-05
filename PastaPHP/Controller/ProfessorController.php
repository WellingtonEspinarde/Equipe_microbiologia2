<?php

include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/ProfessorDao.php';
include __DIR__. '/../model/Professor.php';



//$professor = new Professor();
//$professorDao = new ProfessorDao();

if(isset($_POST['cadastrar'])){
    $professor->setNome($_POST['nome']);
    $professor->setCpf($_POST['cpf']);
    $professor->setemail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professorDao->inserir($professor);
    header("Location: ../index.php");
}

<<<<<<< Updated upstream
if($_SERVER["REQUEST_METHOD"]== "GET"){
    ConnectionFactory::getConnection();
}
=======
>>>>>>> Stashed changes
?>


