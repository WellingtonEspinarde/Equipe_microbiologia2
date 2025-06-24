<?php 
include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/PacienteDao.php';
include __DIR__. '/../model/Paciente.php';

$paciente = new Paciente();
$pacienteDao = new PacienteDao();

if(isset($_POST['Cadastrar'])){
    $paciente = new Paciente();
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
    $idPaciente = $_GET['editar'];
    
    $paciente = $pacienteDao->buscarPorId($idPaciente);

    if(!$paciente->getId()){ // Se o ID do objeto $fabricante ainda não foi setado
        echo "<p>Paciente não encontrado para edição.</p>";
        header("Location: ../index.php?erro=nao_encontrado");
        exit();
    }
}

if(isset($_POST['salvar_edicao'])){
    $paciente = new Paciente();
    $paciente->setId($_POST['id']);
    $paciente->setNome($_POST['nome']);
    $paciente->setCpf($_POST['cpf']);
    $paciente->setDataNascimento($_POST['dataNascimento']);
    $paciente->setTelContato($_POST['telefone']);
    $paciente->setEmailContato($_POST['email']);
    $paciente->setNomeMae($_POST['nomemae']);
    $paciente->setEndereco($_POST['endereco']);
    //$paciente->setExames($_POST['exames']);
    $paciente->setRemedioContinuo($_POST['remedio']);
    $paciente->setQualRemedio($_POST['qualremedio']);
    //$paciente->setPatologia($_POST['patologia']);
    $paciente->setQualPatologia($_POST['patologiaQual']);
    $paciente->setTecResponsavel($_POST['alunoResponsavel']);
    //$paciente->setHorarioTec($_POST['periodo']);
    $paciente->setHistoricoMedico($_POST['historicoMedico']);
    $paciente->setResultados($_POST['resultados']);
    
    $pacienteDao->editar($paciente); // Chama o método editar no DAO

    header("Location: ../Views/CadastroPaciente.php"); // Redireciona de volta para a lista
    exit();
}

function LerPaciente(){
   // $paciente = new Paciente();
    $pacienteDao = new PacienteDao();

    $lista = $pacienteDao->readPaciente();

    foreach ($lista as $pac) {
        echo " <tr>

                            <td>{$pac->getId()}</td>
                            <td>{$pac->getNome()}</td>
                            <td>{$pac->getCpf()}</td>
                            <td>{$pac->getDataNascimento()}</td>
                            <td>{$pac->getTelContato()}</td>
                            <td>{$pac->getEmailContato()}</td>
                            <td>{$pac->getNomeMae()}</td>
                            <td>{$pac->getEndereco()}</td>
                            <td>{$pac->getExames()}</td>
                            <td>{$pac->getRemedioContinuo()}</td>
                            <td>{$pac->getQualRemedio()}</td>
                            <td>{$pac->getPatologia()}</td>
                            <td>{$pac->getQualPatologia()}</td>
                            <td>{$pac->getTecResponsavel()}</td>
                            <td>{$pac->getHorarioTec()}</td>
                            <td>{$pac->getHistoricoMedico()}</td>
                            <td>{$pac->getResultados()}</td>

                            <td>
                            <a href = '../Views/CadastroPaciente.php?editar={$pac->getId()}' class = 'btn btn-primary'>Editar</a>
                            </td>
                            
                        </tr>
                        ";
    }
}






?>