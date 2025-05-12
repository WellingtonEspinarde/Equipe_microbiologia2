<?php
    class Usuario {
        private $nome;
        private $id;
        private $dataNascimento;
        private $cpf;
        private $email;
        private $endereco;


        public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco)
        {
            $this-> nome = $nome;
            $this-> id = $id;
            $this-> dataNascimento = $dataNascimento;
            $this-> cpf = $cpf;
            $this-> email = $email;
            $this-> endereco = $endereco;
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

        public function getdataNascimento(){
            return $this-> dataNascimento;
        }

        public function setdataNascimento($dataNascimento){
            $this-> dataNascimento = $dataNascimento;
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

        public function getEndereco(){
            return $this-> endereco;
        }

        public function setEndereco($endereco){
            $this-> endereco = $endereco;
        }

        public function __toString()
        {
             return "Nome: {$this->nome} - Id: {$this->id} - Data de Nascimento: {$this->dataNascimento} - Cpf: {$this->cpf} - Email: {$this->email} - Endereço: {$this->endereco}";
        }





    }


?>