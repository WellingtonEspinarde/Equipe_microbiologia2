<?php

require_once __DIR__. "/Pessoa.php";

class Professor extends Pessoa { #idade
    private $email; 
    private $senha;

<<<<<<< HEAD
    /*public function __construct($nome, $id, $cpf, $email, $senha){
        parent::__construct($nome, $id, $cpf);
=======
    public function __construct($id,$nome, $cpf, $email,$senha){
        parent:: __construct($nome, $id, $cpf);
>>>>>>> c665bc97b6c8cfa4c61cc0029beb7c17b1dbf13b
        $this->email = $email;
        $this->senha = $senha;
    
        }*/


        public function professor(){
            parent:: __contruct();
        }

        /*public function __construct($nome, $id, $cpf, $email, $senha) {
            parent::__construct($nome, $id, $cpf);
            $this->email = $email;
            $this->senha = $senha;
        }*/
    
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

        public function __toString() {
        return  parent::__toString() . " Email: {$this->email} - Senha: {$this->senha}";
    }

    }
?>