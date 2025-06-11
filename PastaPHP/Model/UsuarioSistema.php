<?php 

require_once __DIR__. "/Pessoa.php";

class UsuarioSistema extends Pessoa{
     private $email;
     private $senha;

      public function __construct($nome, $id, $cpf, $email, $senha) {
        parent::__construct($nome, $id, $cpf);
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

      public function __toString(){
        return parent::__toString(). "Email: {$this->email} - Senha: *****";
    }

}
?>