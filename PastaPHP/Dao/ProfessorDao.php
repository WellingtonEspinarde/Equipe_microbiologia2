<?php

class ProfessorDao{


    public function insert(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,cpf,email,senha) VALUES (:nome,:cpf,:email,:senha)";

                $connect = ConnectionFactory::getConnection()->prepare($sql); 
                $connect->bindValue(":nome", $professor->getNome());
                $connect->bindValue(":cpf", $professor->getCpf());
                $connect->bindValue(":email", $professor->getEmail());   
                $connect->bindValue(":senha", $professor ->getSenha());

                return $connect ->execute();


        }catch(PDOException $ex){

            echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }

     }


     public function SelectId($id){

        try{
            $sql = "SELECT * FROM professor WHERE id = :id";
            $connect = ConnectionFactory::getConnection()->query($sql); 
            $connect->bindValue(":id",$id); // fetch
            $connect ->execute();

            return $connect->fetch(PDO::FETCH_ASSOC);


        }catch(PDOException $ex){
             echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
     }



/*


     public function update(Professor $professor){

        try{

            $sql = "UPDATE professor SET nome = :nome, rgm = :rgm, email = :email, senha = :senha WHERE id = :id";
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




     

     public function delete($id){

        try{

            $sql = "DELETE FROM professor WHERE id = :id";
            $connect = ConnectionFactory::getConnection()->prepare($sql); 
            $connect->bindValue("i:d",$id);

            return $connect ->execute();

        }catch(PDOException $ex){
            
            echo "<p> Error: "  . $ex->getMessage() . "<p>";

        }

     }
*/

  }


?>
