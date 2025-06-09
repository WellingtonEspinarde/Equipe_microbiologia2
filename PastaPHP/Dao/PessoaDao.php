<?php
class UsuarioDao{

    public function inserir(Pessoa $usu){
        
        try{
            $sql = "INSERT INTO usuario (nome, id, cpf)
                VALUES (:nome, :id, :cpf)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $usu->getNome());
            $conn->bindValue(":id", $usu->getId());
            $conn->bindValue(":cpf", $usu->getCpf());
            return $conn->execute(); # executa o insert
        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }



}
?>