<?php

class AlunoDao{

    public function insert(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,id,rgm,email,senha) VALUES (:nome,:id,:rgm,:email,:senha)";

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







}


?>