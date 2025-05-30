<?php
    class Aluno extends Professor {  #extende usuario + rgm
        private $curso;
        private $anoLetivo;

        public function __construct($nome, $id, $cpf, $email, $senha, $rgm, $curso, $anoLetivo){
            parent::__construct($nome, $id, $cpf, $email, $senha, $rgm);
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