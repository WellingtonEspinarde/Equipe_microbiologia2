<?php
class UsuarioDao{

    public function inserir(Usuario $usu){
        try{
            $sql = "INSERT INTO usuario (nome, id, cpf, email, endereco)
                VALUES (:nome, :id, :datanascimento, :cpf, :email, :endereco)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $usu->getNome());
            $conn->bindValue(":id", $usu->getId());
            $conn->bindValue(":rgm", $usu->getRgm());
            $conn->bindValue(":email", $usu->getEmail());
            return $conn->execute(); # executa o insert
        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }



}
?>