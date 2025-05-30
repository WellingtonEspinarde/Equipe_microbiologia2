<?php
    class Aluno extends Professor {  #extende pessoa + rgm
        private $curso;
        private $anoLetivo;

        public function __construct($nome, $id, $cpf, $email, $senha, $curso, $anoLetivo){
            parent::__construct($nome, $id, $cpf, $email, $senha);
            $this->curso = $curso;
            $this->anoLetivo = $anoLetivo;
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
        return parent::__toString(). "Curso: {$this->curso} - Ano Letivo: {$this->anoLetivo}";
    }

    }
?>