<?php 

require_once __DIR__ . "/Pessoa.php";

class UsuarioSistema extends Pessoa{
     private $email;
     private $senha;
     private $anoLetivo;
     private $cargo;

    public function __construct() {
    parent::__construct();
    }
     /* public function __construct($nome, $id, $cpf, $email, $senha) {
        parent::__construct($nome, $id, $cpf);
        $this->email = $email;
        $this->senha = $senha;
    }*/

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

      public function getAnoLetivo(){
        return $this->anoLetivo;
    }
    
    public function setAnoLetivo($anoLetivo){
        $this->anoLetivo = $anoLetivo; 
    }

      public function getCargo(){
        return $this->cargo;
    }
    
    public function setCargo($cargo){
        $this->cargo = $cargo; 
    }

      public function __toString(){
        return parent::__toString(). "Email: {$this->email} - Senha: *****  - Ano Letivo: {$this->anoLetivo} - Cargo: {$this->cargo}";
    }

}
?>