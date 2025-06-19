<?php

include '../dao/ConnectionFactory.php';
include __DIR__ . '/../dao/ProfessorDao.php';
include __DIR__ . '/../model/Professor.php';

$professor = new Professor();
$professorDao = new ProfessorDao();

if (isset($_POST['cadastrar'])) {
    $professor->setNome($_POST['nome']);
    $professor->setCpf($_POST['cpf']);
    $professor->setEmail($_POST['email']);
    $professor->setSenha($_POST['senha']);
    $professor->setAnoLetivo($_POST['anoletivo']);
    $professor->setCargo($_POST['cargo']);

    $professorDao->inserir($professor);

    // header("Location: ../Views/index.php");

}

if(isset($_GET['editar'])){
    $professor = new Professor();
    
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ConnectionFactory::getConnection();
}

function LerProfessor()
{


    $professor = new Professor();
    $professorDao = new ProfessorDao();

    $lista = $professorDao->readProfessor();

    //print_r($lista);

    foreach ($lista as $prof) {
        echo " <tr>
                            <td>{$prof->getId()}</td>
                            <td>{$prof->getNome()}</td>
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
