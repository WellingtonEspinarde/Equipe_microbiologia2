<?php
class Professor extends Usuario {
    private $numeroIdentificador;

    public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $numeroIdentificador){
        parent:: __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);
        $this->numeroIdentificador = $numeroIdentificador;
    
        }
    
        public function getNumeroIdentificador(){
        return $this-> numeroIdentificador;
        }
    
        public function setNumeroIdentificador($numeroIdentificador){
        $this-> numeroIdentificador = $numeroIdentificador; 
        }

        public function __toString() {
    return parent::__toString() . " - Número Identificador: {$this->numeroIdentificador}";
    }

    }
?>