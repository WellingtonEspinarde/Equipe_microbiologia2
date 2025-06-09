<?php

include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/PessoaDao.php';
include __DIR__. '/../model/Pessoa.php';



if(isset($_POST['cadastrar'])){
    $pessoa->setId($_POST['id']);
    $pessoa->setCpf($_POST['cpf']);
    $pessoaDao->inserir($pessoa);
    header("Location: ../index.php");
}

if($_SERVER["REQUEST_METHOD"]== "GET"){
    ConnectionFactory::getConnection();
}
?>




        