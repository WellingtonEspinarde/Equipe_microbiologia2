<?php

require_once __DIR__. "/Pessoa.php";

class Professor extends UsuarioSistema {
   

    public function __construct($nome,$id, $cpf, $email,$senha){
        parent:: __construct($nome, $id, $cpf, $email, $senha);
    }

        public function __toString() {
        return parent::__toString() . " Professor:";
    }

    }
?>