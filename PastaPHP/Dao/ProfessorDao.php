<?php

class ProfessorDao{


    public function insert(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,id,rgm,email,senha) VALUES (:nome,:id,:rgm,:email,:senha)";

                $connect = ConnectionFactory::getConnection()->prepare($sql); 
                $connect->bindValue(":nome", $professor->getNome());
                $connect->bindValue(":id", $professor->getId());
                $connect->bindValue(":rgm", $professor->getRgm());
                $connect->bindValue(":email", $professor->getEmail());
                $connect->bindValue(":email", $professor->getEmail());   
                $connect->bindValue(":senha", $professor ->getSenha());

                return $connect ->execute();


        }catch(PDOException $ex){

            echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
    }

}



?>
