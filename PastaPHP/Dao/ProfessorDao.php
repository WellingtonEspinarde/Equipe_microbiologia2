<?php

class ProfessorDao{

    //Create 
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

      public function listaProfessor($line){ // W
                $professor = new Professor();
                $professor->setId($line ['id']);
                $professor->setNome($line ['nome']);
                $professor->setCpf($line ['cpf']);
                $professor->setEmail($line ['email']);
                $professor->setSenha($line ['senha']);
                $professor->setAnoLetivo($line ['anoLetivo']);
                $professor->setCargo($line ['anoLetivo']);
                
        return $professor;
    }

     //Read
     public function readProfessor(){

        try{
           
            $sql = "SELECT * FROM professor";
            $connect = ConnectionFactory::getConnection()->query($sql);
            $connect ->execute();

            $list = $connect->fetchAll(PDO::FETCH_ASSOC);

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
     
     //
     public function editar(Professor $prof){ //
        try{
            $sql = "UPDATE professor SET nome=:nome ,cpf=:cpf ,email=:email ,senha=:senha ,anoLetivo=:anoLetivo,cargo=:cargo WHERE id = :id";
            
            $conn = ConnectionFactory::getConnection()->prepare($sql);
                $conn->bindValue(":id", $prof->getId());
                $conn->bindValue(":nome", $prof->getNome());     
                $conn->bindValue(":cpf", $prof->getCpf());
                $conn->bindValue(":email", $prof->getEmail());
                $conn->bindValue(":senha", $prof->getSenha());
                $conn->bindValue(":anoLetivo", $prof->getAnoLetivo());
                $conn->bindValue(":cargo", $prof->getCargo());
            return $conn->execute(); // Executa o update
        }catch(PDOException $ex){
            echo "<p> Erro ao editar </p> <p> $ex </p>";
        }
    }

     public function buscarPorId($id){ //
        try{
            $sql = "SELECT * FROM professor WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":id", $id);
            $conn->execute();
            $row = $conn->fetch(PDO::FETCH_ASSOC); // Busca apenas uma linha
            if($row){
                return $this->listaProfessor($row);
            }
            return null; // Retorna null se não encontrar o ID
        }catch(PDOException $ex){
            echo "<p>Erro ao buscar Paciente por ID: </p> <p> {$ex->getMessage()} </p>";
            return null;
        }
    }


  }


?>
