<?php
class Professor extends Usuario {

    public function __construct($nome, $id, $rgm, $email, $senha){
        parent:: __construct($nome, $id, $rgm, $email, $senha);
        }

        public function __toString() {
        return  parent::__toString();
    }

    }
?>