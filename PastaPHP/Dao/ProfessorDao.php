<?php

class ProfessorDao{


    public function insert(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,id,rgm,email,senha) VALUES (:nome,:id,:rgm,:email,:senha)";

                $conn = ConnectionFactory::getConnection()->prepare($sql); 
                $conn->bindValue(":nome", $professor->getNome());
                $conn->bindValue(":id", $professor->getId());
                $conn->bindValue(":rgm", $professor->getRgm());
                $conn->bindValue(":email", $professor->getEmail());

                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                $conn->bindValue(":senha", $professor ->getSenha());

                return $conn ->execute();


        }catch(PDOException $ex){
            echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
    }

}



?>
