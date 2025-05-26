<?php

class AlunoDao{
    private $pdo;
}

public function __construct($pdo){
    $this->pdo = $pdo;
}


public function inserir(Aluno $aluno){
    
    $sql = "INSERT INTO  aluno(matricula, curso, anoLetivo) VALUES (:matricula, :curso, anoLetivo)";
    $stmt = $this->pdo->prepare($sql);
    $stmt ->bindValue(':nome', $aluno -> getCurso());
    $stmt ->bindValue('anoLetivo', $aluno ->getanoLetivo());
    $stmt ->execute();

}



?>