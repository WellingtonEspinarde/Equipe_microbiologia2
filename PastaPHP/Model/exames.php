<?php 
class Exames extends Usuario{ #OBS: vou criar outra Classe, nao existe Herança aqui
    
    // Atributos a rever com a Equipe se necessario com ??
    /*ENTIDADE EXAMES ->
TIPOSDEEXAMES. 
NOME. ok
DESCRIÇÃO. ok
TIPOAMOSTRA. ok
RESULTADO. ok
IDALUNO.??
VALORREFERENCIA. ??
UNIDADEMEDIDA. ??
PRIORIDADE. ok
ESTÁEMJEJUMOUNÃO. */

    private $nomeExame;
    private $descricao;
    private $tipoAmostra;
    private $resultado;
    private $prioridade;

    public function __construct($nome, $id, $dataNascimento, $cpf, $email, $endereco, $nomeExame, $descricao, $tipoAmostra, $resultado, $prioridade  ){
            parent::__construct($nome, $id, $dataNascimento, $cpf, $email, $endereco);
            $this->nomeExame = $nomeExame;
            $this->descricao = $descricao;
            $this->tipoAmostra = $tipoAmostra;
            $this->resultado = $resultado;
            $this->prioridade = $prioridade;
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
        return parent::__toString(). "Nome do Exame: {$this->nomeExame} - Descrição: {$this->descricao} - Tipo da Amostra: {$this->tipoAmostra} - Resultado: {$this->resultado} - Prioridade: {$this->prioridade} ";
    }

 }
?>