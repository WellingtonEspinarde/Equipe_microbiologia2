<?php 

require_once __DIR__ .'/../dao/ExamesDao.php';
//require_once __DIR__.'../Model/Exame.php'; 


class Exames {
    private $id;
    private $idUsuario; #chave extrangeira
    private $idPaciente; #chave extrangeira
    private $nomeExame;
    private $descricao;
    private $tipoAmostra;
    private $resultado;
    private $prioridade;

    public function __construct(){
        
    }

    /*public function __construct($id, $idUsuario, $idPaciente, $nomeExame, $descricao, $tipoAmostra, $resultado, $prioridade){
        $this->id = $id;
        $this->idUsuario = $idUsuario;
        $this->idPaciente = $idPaciente;
        $this->nomeExame = $nomeExame;
        $this->descricao = $descricao;
        $this->tipoAmostra = $tipoAmostra;
        $this->resultado = $resultado;
        $this->prioridade = $prioridade;

    }*/

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id; 
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario; 
    }

    public function getIdPaciente(){
        return $this->idPaciente;
    }
    
    public function setIdPaciente($idPaciente){
        $this->idPaciente = $idPaciente; 
    }
    
     public function getNomeExame(){
        return $this->nomeExame;
    }
    
    public function setNomeExame($nomeExame){
        $this->nomeExame = $nomeExame; 
    }

    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao; 
    }

    public function getTipoAmostra(){
        return $this->tipoAmostra;
    }
    
    public function setTipoAmostra($tipoAmostra){
        $this->tipoAmostra = $tipoAmostra; 
    }

    public function getResultado(){
        return $this->resultado;
    }
    
    public function setResultado($resultado){
        $this->resultado = $resultado; 
    }

     public function getPrioridade(){
        return $this->prioridade;
    }
    
    public function setPrioridade($prioridade){
        $this->prioridade = $prioridade; 
    }

    
        public function __toString(){
             return "Id Exame: {$this->id} - Id Usuário: {$this->idUsuario} - Id Paciente: {$this->idPaciente} - Nome do Exame: {$this->nomeExame} - Descrição: {$this->descricao} - Tipo da Amostra: {$this->tipoAmostra} - Resultado: {$this->resultado} - Prioridade: {$this->prioridade}";
        }

 }
?>