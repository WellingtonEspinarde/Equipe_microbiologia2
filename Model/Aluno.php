<?php
    class Aluno extends Usuario {
        private $matricula;
        private $curso;
        private $anoLetivo;

        public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $matricula, $curso, $anoLetivo){
            parent::__construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);
            $this->matricula = $matricula;
            $this->curso = $curso;
            $this->anoLetivo = $anoLetivo;
        }     

    public function getMatricula(){
        return $this->matricula;
    }
    
    public function setMatricula($matricula){
        $this->matricula = $matricula; 
    }

     public function getCurso(){
        return $this->curso;
    }
    
    public function setCurso($curso){
        $this->curso = $curso; 
    }

     public function getAnoLetivo(){
        return $this->anoLetivo;
    }
    
    public function setAnoLetivo($anoLetivo){
        $this->anoLetivo = $anoLetivo; 
    }

   
      public function __toString(){
        return parent::__toString(). "Matricula: {$this->matricula} - Curso: {$this->curso} - Ano Letivo: {$this->anoLetivo}";
    }

    }
?>