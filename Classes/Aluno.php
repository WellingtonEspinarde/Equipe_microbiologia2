<?php
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;
        private $anoLetivo;
}
public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $matricula, $curso, $anoLetivo){
    parent::__construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);
    $this->matricula = $matricula;
    $this->curso = $curso;
    $this->anoLetivo;
     
}