<?php

class ProfessorDao{


    public function inserir(Professor $professor){
        try{
             $sql = "INSERT INTO professor (nome,cpf,email,senha,anoLetivo, cargo) VALUES (:nome,:cpf,:email,:senha,:anoLetivo, :cargo)";

                $connect = ConnectionFactory::getConnection()->prepare($sql); 
                $connect->bindValue(":nome", $professor->getNome());     
                $connect->bindValue(":cpf", $professor->getCpf());
                $connect->bindValue(":email", $professor->getEmail());
                $connect->bindValue(":senha", $professor->getSenha());
                $connect->bindValue(":anoLetivo", $professor->getAnoLetivo());
                $connect->bindValue(":cargo", $professor->getCargo());
                     
                return $connect ->execute();

        }catch(PDOException $ex){

            echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }

     }

/*   public function SelectId($id){

        try{
            $sql = "SELECT * FROM professor WHERE id = :id";
            $connect = ConnectionFactory::getConnection()->query($sql); 
            $connect->bindValue(":id",$id); 
            $connect ->execute();

            return $connect->fetch(PDO::FETCH_ASSOC);


        }catch(PDOException $ex){
             echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
     }

*/
     
     public function readProfessor(){

        try{
           
            $sql = "SELECT * FROM professor";
            $connect = ConnectionFactory::getConnection()->query($sql);
            $connect ->execute();

            $list = $connect->fetchAll(PDO::FETCH_ASSOC);

// nome,cpf,email,senha,anoLetivo, cargo

            $listProfessor = array();
            foreach($list as $line){
                $Professorline = new Professor();
                $Professorline->setId($line ['id']);
                $Professorline->setNome($line ['nome']);
                $Professorline->setCpf($line ['cpf']);
                $Professorline->setEmail($line ['email']);
                $Professorline->setAnoLetivo($line ['anoLetivo']);
                $Professorline->setCargo($line ['cargo']);

                $listProfessor[] = $Professorline;
            }

            return $listProfessor;

        }catch(PDOException $ex){
             echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
     }

/*     public function update(Professor $professor){

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
