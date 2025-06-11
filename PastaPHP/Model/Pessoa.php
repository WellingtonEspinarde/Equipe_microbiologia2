<?php
    class Pessoa {
        private $nome;
        private $id;
        private $cpf;

        public function __construct(){
            
        }

       /* public function __construct($nome, $id, $cpf){
            $this->nome = $nome;
            $this->id = $id;
            $this->cpf = $cpf;
        }*/

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function __toString(){
             return "Nome: {$this->nome} - Id: {$this->id} - Cpf: {$this->cpf}";
        }

    }

?>