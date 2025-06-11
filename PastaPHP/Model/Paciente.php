<?php
require_once __DIR__ . "/Pessoa.php";

class Paciente extends Pessoa {
    private $dataNascimento; 
    private $telContato;
    private $emailContato;
    private $nomeMae;
    private $endereco;
    private $remedioContinuo;
    private $qualRemedio;
    private $patologia;
    private $qualPatologia;
    private $tecResponsavel;
    private $horarioTec;

    private $exames;
    private $resultados;
    private $historicoMedico;
    private $alunoResponsavel; 

    public function __construct() {
    parent::__construct();
    }

    /*public function __construct($nome, $id, $cpf, $dataNascimento, $telContato, $emailContato, $nomeMae, $endereco, $remedioContinuo, $qualRemedio, $patologia, $qualPatologia, $tecResponsavel, $horarioTec, $exames, $resultados, $historicoMedico, $alunoResponsavel){
        parent::__construct($nome, $id, $cpf);
        $this->dataNascimento = $dataNascimento;
        $this->telContato = $telContato;
        $this->emailContato = $emailContato;
        $this->nomeMae = $nomeMae;
        $this->endereco = $endereco;
        $this->remedioContinuo = $remedioContinuo;
        $this->qualRemedio = $qualRemedio;
        $this->patologia = $patologia;
        $this->qualPatologia = $qualPatologia;
        $this->tecResponsavel = $tecResponsavel;
        $this->horarioTec = $horarioTec;
        $this->exames = $exames;  
        $this->resultados = $resultados;
        $this->historicoMedico = $historicoMedico;
        $this->alunoResponsavel = $alunoResponsavel;
    }*/

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento; 
    }

    public function getTelContato(){
        return $this->telContato;
    }

    public function setTelContato($telContato){
        $this->telContato = $telContato; 
    }

     public function getEmailContato(){
        return $this->emailContato;
    }

    public function setEmailContato($emailContato){
        $this->emailContato = $emailContato; 
    }

    public function getNomeMae(){
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae){
        $this->nomeMae = $nomeMae; 
    }

      public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco; 
    }

    public function getRemedioContinuo(){
        return $this->remedioContinuo;
    }

    public function setRemedioContinuo($remedioContinuo){
        $this->remedioContinuo = $remedioContinuo; 
    }

     public function getQualRemedio(){
        return $this->qualRemedio;
    }

    public function setQualRemedio($qualRemedio){
        $this->qualRemedio = $qualRemedio; 
    }

     public function getPatologia(){
        return $this->patologia;
    }

    public function setPatologia($patologia){
        $this->patologia = $patologia; 
    }

    public function getQualPatologia(){
        return $this->qualPatologia;
    }

    public function setQualPatologia($qualPatologia){
        $this->qualPatologia = $qualPatologia; 
    }

    public function getTecResponsavel(){
        return $this->tecResponsavel;
    }

    public function setTecResponsavel($tecResponsavel){
        $this->tecResponsavel = $tecResponsavel; 
    }

    public function getHorarioTec(){
        return $this->horarioTec;
    }

    public function setHorarioTec($horarioTec){
        $this->horarioTec = $horarioTec; 
    }

    public function getExames(){
        return $this->exames;
    }

    public function setExames($exames){
        $this->exames = $exames; 
    }

    public function getResultados(){
        return $this->resultados;
    }

    public function setResultados($resultados){
        $this->resultados = $resultados; 
    }

    public function getHistoricoMedico(){
        return $this->historicoMedico;
    }

    public function setHistoricoMedico($historicoMedico){
        $this->historicoMedico = $historicoMedico; 
    }

    public function getAlunoResponsavel(){
        return $this->alunoResponsavel;
    }

    public function setAlunoResponsavel($alunoResponsavel){
        $this->alunoResponsavel = $alunoResponsavel; 
    }

    public function __toString(){
        return parent::__toString() . 
            " Data de Nascimento: {$this->dataNascimento} - Telefone p/ Contato: {$this->telContato} - Email p/ Contato: {$this->emailContato} - Nome da Mãe: {$this->nomeMae} - Endereço: {$this->endereco} - Toma remédio contínuo: {$this->remedioContinuo} - Nome do Remédio: {$this->qualRemedio}  Alguma Patologia: {$this->patologia} - Qual Patologia: {$this->qualPatologia} - Técnico responsável: {$this->tecResponsavel} - Horario do Técnico: {$this->horarioTec} - Exame: {$this->exames} - Resultado: {$this->resultados} - Historico Medico: {$this->historicoMedico} - Aluno Responsavel: {$this->alunoResponsavel}";
    }
}
?>