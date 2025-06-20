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

if(isset($_GET['editar'])){
    $paciente = new Paciente();
    
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    ConnectionFactory::getConnection();
}

function LerPaciente(){

    $paciente = new Paciente();
    $pacienteDao = new PacienteDao();

    $lista = $pacienteDao->readPaciente();

    foreach ($lista as $paci) {
        echo " <tr>

                            <td>{$paci->getId()}</td>
                            <td>{$paci->getNome()}</td>
                            <td>{$paci->getCpf()}</td>
                            <td>{$paci->getDataNascimento()}</td>
                            <td>{$paci->getTelContato()}</td>
                            <td>{$paci->getEmailContato()}</td>
                            <td>{$paci->getNomeMae()}</td>
                            <td>{$paci->getEndereco()}</td>
                            <td>{$paci->getExames()}</td>
                            <td>{$paci->getRemedioContinuo()}</td>
                            <td>{$paci->getQualRemedio()}</td>
                            <td>{$paci->getPatologia()}</td>
                            <td>{$paci->getQualPatologia()}</td>
                            <td>{$paci->getTecResponsavel()}</td>
                            <td>{$paci->getHorarioTec()}</td>
                            <td>{$paci->getHistoricoMedico()}</td>
                            <td>{$paci->getResultados()}</td>

                            <td>

                            <a href = '../Views/CadastroPaciente.php?editar={$paci->getId()}' class = 'btn btn-primary'>Editar</a>

                            </td>
                            
                        </tr>
                        ";
    }

    
}






?>