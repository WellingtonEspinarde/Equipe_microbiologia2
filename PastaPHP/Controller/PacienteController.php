<?php 
include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/PacienteDao.php';
include __DIR__. '/../model/Paciente.php';

$paciente = new Paciente();
$pacienteDao = new PacienteDao();

if(isset($_POST['Cadastrar'])){
    $paciente->setNome($_POST['nome']);
    $paciente->setCpf($_POST['cpf']);
    $paciente->setDataNascimento($_POST['dataNascimento']);
    $paciente->setTelContato($_POST['telefone']);
    $paciente->setEmailContato($_POST['email']);
    $paciente->setNomeMae($_POST['nomemae']);
    $paciente->setEndereco($_POST['endereco']);
    $paciente->setExames($_POST['exames']);
    $paciente->setRemedioContinuo($_POST['remedio']);
    $paciente->setQualRemedio($_POST['qualremedio']);
    $paciente->setPatologia($_POST['patologia']);
    $paciente->setQualPatologia($_POST['patologiaQual']);
    $paciente->setTecResponsavel($_POST['alunoResponsavel']);
    $paciente->setHorarioTec($_POST['periodo']);
    $paciente->setHistoricoMedico($_POST['historicoMedico']);
    $paciente->setResultados($_POST['resultados']);

    $pacienteDao->inserir($paciente);
    header("Location: ../Views/CadastroPaciente.php");
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    ConnectionFactory::getConnection();
}


?>