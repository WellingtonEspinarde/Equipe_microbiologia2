<?php
class Professor extends Usuario {
    private $rgm;

    public function __construct($nome, $id, $cpf, $email, $senha, $rgm){
        parent:: __construct($nome, $id, $cpf, $email, $senha);
        $this->rgm = $rgm;
    
        }
    
        public function getRgm(){
        return $this-> rgm;
        }
    
        public function setNumeroIdentificador($rgm){
        $this-> rgm = $rgm; 
        }

        public function __toString() {
        return  parent::__toString() . " - Rgm: {$this->rgm}";
    }

    }
?>