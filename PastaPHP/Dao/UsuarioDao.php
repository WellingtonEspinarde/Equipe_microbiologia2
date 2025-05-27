<?php
class UsuarioDao{

    public function inserir(Usuario $usu){
        try{
            $sql = "INSERT INTO usuario (nome, id, datanascimento, cpf, email, endereco)
                VALUES (:nome, :id, :datanascimento, :cpf, :email, :endereco)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $usu->getNome());
            $conn->bindValue(":id", $usu->getId());
            $conn->bindValue(":datanascimento", $usu->getdataNascimento());
            $conn->bindValue(":cpf", $usu->getCpf());
            $conn->bindValue(":email", $usu->getEmail());
            $conn->bindValue(":endereco", $usu->getEndereco());
            return $conn->execute(); # executa o insert
        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }



}
?>