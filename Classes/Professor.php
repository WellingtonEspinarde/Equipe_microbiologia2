<?php
class Professor extends Pessoa {
    private $numeroIdentificador;

}

    public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $numeroIdentificador){

    parent:: __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);
    $this->numeroIdentificador = $numeroIdentificador;

    }

    public function getNumeroIdentificador(){
    return $this-> numeroIdentificador;
    }

    public function setNumeroIdentificador($numeroIdentificador){
    $this-> numeroIdentificador = $numeroIdentificador; //teste
    }


?>