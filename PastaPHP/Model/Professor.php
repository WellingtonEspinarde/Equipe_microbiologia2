<?php

require_once __DIR__. "/UsuarioSistema.php";

class Professor extends UsuarioSistema{
   

    /*public function __construct($nome,$id, $cpf, $email,$senha){
        parent:: __construct($nome, $id, $cpf, $email, $senha);
    }*/

    public function __construct(){
      parent:: __construct();
    }

        public function __toString() {
        return parent::__toString() . " Professor:";
    }

    }
?>