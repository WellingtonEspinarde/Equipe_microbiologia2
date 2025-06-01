<?php

class ProfessorDao{


    public function insert(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,id,rgm,email,senha) VALUES (:nome,:id,:rgm,:email,:senha)";

                $conn = ConnectionFactory::getConnection()->prepare($sql); 
                $conn->bindValue(":nome", $professor->getNome());
                $conn->bindValue(":id", $professor->getId());
                $conn->bindValue(":rgm", $professor->getRgm());
<<<<<<< Updated upstream
                $conn->bindValue(":email", $professor->getEmail());
=======
                $conn->bindValue(":email", $professor->getEmail());   
>>>>>>> Stashed changes
                $conn->bindValue(":senha", $professor ->getSenha());

                return $conn ->execute();


        }catch(PDOException $ex){

            echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
    }

}



?>
