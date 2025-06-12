<?php
class PessoaDao{

    public function inserir(Pessoa $usu){
        
        try{
            $sql = "INSERT INTO pessoa (nome, cpf)
                VALUES (:nome, :cpf)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $usu->getNome());
            $conn->bindValue(":cpf", $usu->getCpf());

            return $conn->execute();  //executa o insert
        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }



}
?>