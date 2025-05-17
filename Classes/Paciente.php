<?php
class Paciente extends Usuario{
    
    private $exames;
    private $resultados;
    private $historicoMecido;
    private $alunoResponsavel; 

    public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $exames, $resultados,$historicoMecido,$alunoResponsavel){
      parent:: __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);

      $this->exames = $exames;  
      $this->resultados = $resultados;
      $this->historicoMecido = $historicoMecido;
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
        return $this->historicoMecido;
    }
    
    public function setHistoricoMecido($historicoMecido){
        $this->historicoMecido = $historicoMecido; 
    }
  
    public function getAlunoResponsavel(){
        return $this->alunoResponsavel;
    }
    
    public function setAlunoResponsavel($alunoResponsavel){
        $this->alunoResponsavel = $alunoResponsavel; 
    }

    public function __toString(){
        return "Exane: {$this->exames} - Resultado: {$this->resultados} - Historico Medico: {$this->historicoMecido} - Aluno Responsavel: {$this->alunoResponsavel}";
    }

  }
?>