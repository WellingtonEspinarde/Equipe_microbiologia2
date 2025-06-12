<?php 
include '../dao/ConnectionFactory.php';
include __DIR__. '/../dao/UsuarioSistemaDao.php';
include __DIR__. '/../model/UsuarioSistema.php';

$usuario = new UsuarioSistema();
$usuarioDAO = new UsuarioSistemaDao();

if(isset($_POST['Cadastrar'])){
    $usuario->setNome($_POST['nome']);
    $usuario->setCpf($_POST['cpf']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setAnoLetivo($_POST['ano']);
    $usuario->setCargo($_POST['cargo']); 

    $UsuarioSistemaDao->inserir($usuario);
    //header("Location: ../Views/CadastroPaciente.php");
}


?>