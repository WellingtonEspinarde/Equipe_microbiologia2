<?php

class ProfessorDao{


    /*

    Mudar os atributos da INSETIR PROFESSOR DE ACORDO COM O BANCO DE DADOS


    */

    public function inserir(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,id,email,senha) VALUES (:nome,:id,:rgm,:email,:senha)";

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

     


      
            //return $connect->fetch(PDO::FETCH_ASSOC);


    

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


  }


?>
