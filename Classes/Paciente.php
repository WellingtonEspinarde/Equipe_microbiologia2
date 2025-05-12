<?php

class Paciente extends Usuario{
    
    private $exames;
    private $resultados;
    private $historicoMecido;
    private $alunoResponsavel; 

  }
    public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $exames, $resultados, $historicoMedico, $alunoResponsavel){
        parent:: __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco)

        $this->exame = $exames;  
        $this->resultado = $resultados;
        $this->historicoMedico = $histrMedico;
        $this->alunoResponsavel = $alunoResp;

}


?>