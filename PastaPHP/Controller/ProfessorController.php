<?php

include '../dao/ConnectionFactory.php';
include __DIR__ . '/../dao/ProfessorDao.php';
include __DIR__ . '/../model/Professor.php';

$professor = new Professor();
$professorDao = new ProfessorDao();

if (isset($_POST['Cadastrar'])) {
    $professor->setNome($_POST['nome']);
    $professor->setCpf($_POST['cpf']);
    $professor->setEmail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professor->setAnoLetivo($_POST['anoletivo']);
    $professor->setCargo($_POST['cargo']);

    $professorDao->inserir($professor);

    //header("Location: ../Views/index.php");
    header("Location: ../Views/Cadastro.php");

}

if(isset($_GET['editar'])){ //
    $idProfessor = $_GET['editar'];
    
    $professor = $professorDao->buscarPorId($idProfessor);

    if(!$professor->getId()){ // Se o ID do objeto $fabricante ainda não foi setado
        echo "<p>Professor não encontrado para edição.</p>";
        header("Location: ../index.php?erro=nao_encontrado");
        exit();
    }
}

if(isset($_POST['salvar_edicao'])){
    $professor = new Professor();
    $professor->setId($_POST['id']);
    $professor->setNome($_POST['nome']);
    $professor->setCpf($_POST['cpf']);
    $professor->setEmail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professor->setAnoLetivo($_POST['anoletivo']);
    $professor->setCargo($_POST['cargo']);
    
    $professorDao->editar($professor); // Chama o método editar no DAO

    header("Location: ../Views/Cadastro.php"); // Redireciona de volta para a lista
    exit();
}


function LerProfessor(){
    //$professor = new Professor();
    $professorDao = new ProfessorDao();

    $lista = $professorDao->readProfessor();

    foreach ($lista as $prof) {
        echo " <tr>

                            <td>{$prof->getId()}</td>
                            
                            <td>{$prof->getCpf()}</td>
                            <td>{$prof->getEmail()}</td>
                            <td>{$prof->getAnoLetivo()}</td>
                            <td>{$prof->getCargo()}</td>

                            <td>
                                <a href = '../Views/Cadastro.php?editar={$prof->getId()}' class = 'btn btn-primary'>Editar</a>
                            </td>
                            
                        </tr>
                        ";
    }

}
