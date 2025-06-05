<?php 
include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/PacienteDao.php';
include __DIR__. '/../model/Paciente.php';

    if(isset($_POST['Cadastrar'])){
    $paciente->setExames($_POST['exame']);
    $paciente->setResultados($_POST['resultados']);
    $paciente->setHistoricoMecido($_POST['historicoMedico']);
    $paciente->setAlunoResponsavel($_POST['alunoResponsavel']);
    $pacienteDao->inserir($paciente);
    header("Location: ../index.php");
}

if($_SERVER["REQUEST_METHOD"]== "GET"){
    ConnectionFactory::getConnection();
}


?>