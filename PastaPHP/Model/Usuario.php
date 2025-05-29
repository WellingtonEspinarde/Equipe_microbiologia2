<?php
    class Usuario {
        private $nome;
        private $id;
        private $cpf;
        private $email;
        private $senha;


        public function __construct($nome, $id, $cpf, $email, $senha){
        
            $this-> nome = $nome;
            $this-> id = $id;
            $this-> cpf = $cpf;
            $this-> email = $email;
            $this-> senha = $senha;
        }

        public function getNome(){
            return $this-> nome;
        }

        public function setNome($nome){
            $this-> nome = $nome;
        }

        public function getId(){
            return $this-> id;
        }

        public function setId($id){
            $this-> id = $id;
        }

        public function getCpf(){
            return $this-> cpf;
        }

        public function setCpf($cpf){
            $this-> cpf = $cpf;
        }

        public function getEmail(){
            return $this-> email;
        }

        public function setEmail($email){
            $this-> email = $email;
        }

         public function getSenha(){
            return $this-> senha;
        }

        public function setSenha($senha){
            $this-> senha = $senha;
        }

        public function __toString(){
             return "Nome: {$this->nome} - Id: {$this->id} - Cpf: {$this->cpf} - Email: {$this->email}";
        }

    }

?>