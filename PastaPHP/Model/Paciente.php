<?php
class Paciente extends Usuario{ 
    private $exames;
    private $resultados;
    private $historicoMedico;
    private $alunoResponsavel; 

    public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $exames, $resultados,$historicoMedico,$alunoResponsavel){
      parent:: __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);

      $this->exames = $exames;  
      $this->resultados = $resultados;
      $this->historicoMedico = $historicoMedico;
      $this->alunoResponsavel = $alunoResponsavel;
   }

    public function getExames(){
        return $this->exames;
    }
    
    public function setExames($exames){
        $this->exames = $exames; 
    }

    public function getResultados(){
        return $this->resultados;
    }
    
    public function setResultados($resultados){
        $this->resultados = $resultados; 
    }

    
    public function getHistoricoMecido(){
        return $this->historicoMedico;
    }
    
    public function setHistoricoMecido($historicoMedico){
        $this->historicoMedico = $historicoMedico; 
    }
  
    public function getAlunoResponsavel(){
        return $this->alunoResponsavel;
    }
    
    public function setAlunoResponsavel($alunoResponsavel){
        $this->alunoResponsavel = $alunoResponsavel; 
    }

    public function __toString(){
        return parent::__toString(). "Exame: {$this->exames} - Resultado: {$this->resultados} - Historico Medico: {$this->historicoMedico} - Aluno Responsavel: {$this->alunoResponsavel}";
    }

  }
?>