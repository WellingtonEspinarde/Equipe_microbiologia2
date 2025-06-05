<?php

include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/ExamesDao.php';
include __DIR__. '/../model/Exames.php';
//$exame = new Exames();
//$examesDao = new ExamesDao();
if (isset($_POST['cadastrar'])) {
    $exame->setIdUsuario($_POST['idUsuario']);
    $exame->setIdPaciente($_POST['idPaciente']);
    $exame->setNomeExame($_POST['nomeExame']);
    $exame->setDescricao($_POST['descricao']);
    $exame->setTipoAmostra($_POST['tipoAmostra']);
    $exame->setResultado($_POST['resultado']);
    $exame->setPrioridade($_POST['prioridade']);
    $professorDao->inserir($exame);
    header("Location: ../index.php");

    /*if ($examesDao->inserir($exame)) {
        header("Location: ../index.php");
    } else {
        echo "Erro ao cadastrar exame.";
    }*/
}
/*if (isset($_GET['listar'])) {
    $exames = $examesDao->listarTodos();
    if ($exames) {
        foreach ($exames as $ex) {
            echo "ID: " . $ex['id'] . "<br>";
            echo "Usuário ID: " . $ex['idUsuario'] . "<br>";
            echo "Paciente ID: " . $ex['idPaciente'] . "<br>";
            echo "Nome do Exame: " . $ex['nomeExame'] . "<br>";
            echo "Descrição: " . $ex['descricao'] . "<br>";
            echo "Tipo de Amostra: " . $ex['tipoAmostra'] . "<br>";
            echo "Resultado: " . $ex['resultado'] . "<br>";
            echo "Prioridade: " . $ex['prioridade'] . "<br><hr>";
        }
    } else {
        echo "Nenhum exame encontrado.";
    }

}*/
if($_SERVER["REQUEST_METHOD"]== "GET"){
    ConnectionFactory::getConnection();
}
