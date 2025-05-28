<?php
    class Usuario {
        private $nome;
        private $id;
        private $rgm;
        private $email;
        private $senha;


        public function __construct($nome, $id, $rgm, $email, $senha){
        
            $this-> nome = $nome;
            $this-> id = $id;
            $this-> rgm = $rgm;
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

        public function getRgm(){
            return $this-> rgm;
        }

        public function setRgm($rgm){
            $this-> rgm = $rgm;
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
             return "Nome: {$this->nome} - Id: {$this->id} - Rgm: {$this->rgm} - Email: {$this->email}";
        }

    }

?>