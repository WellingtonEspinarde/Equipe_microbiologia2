<?php

require_once __DIR__. "/UsuarioSistema.php";

    class Aluno extends UsuarioSistema {
        private $curso;
        //private $anoLetivo;  classe em comum 

        public function __construct(){
            parent::__construct();
        }

    /*public function __construct($nome, $id, $cpf, $email, $senha, $curso, $anoLetivo){
            parent::__construct($nome, $id, $cpf, $email, $senha);
            $this->curso = $curso;
            $this->anoLetivo = $anoLetivo;
        }*/  

     public function getCurso(){
        return $this->curso;
    }
    
    public function setCurso($curso){
        $this->curso = $curso; 
    }

     /*public function getAnoLetivo(){
        return $this->anoLetivo;
    }
    
    public function setAnoLetivo($anoLetivo){
        $this->anoLetivo = $anoLetivo; 
    }*/

   
      public function __toString(){
        return parent::__toString(). " Curso: {$this->curso}";
    }

    }
?>