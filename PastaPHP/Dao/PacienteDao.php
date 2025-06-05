<?php
class PacienteDao{

    public function inserir(Paciente $paci){
        
        try{
            $sql = "INSERT INTO paciente (nome, cpf, exame, resultado, historicomedico, alunoResponsavel) #id retirado
                VALUES (:nome, :cpf, :exame, :resultado, :historicomedico, :alunoresponsavel)"; #id retirado
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $paci->getNome());
           #$conn->bindValue(":id", $paci->getId());         talvez nao seja necessario é auto increment no banco
            $conn->bindValue(":cpf", $paci->getCpf());
            $conn->bindValue(":exame", $paci->getExames());
            $conn->bindValue(":resultado", $paci->getResultados());
            $conn->bindValue(":historicomedico", $paci->getHistoricoMecido());
            $conn->bindValue(":alunoresponsavel", $paci->getAlunoResponsavel());

            return $conn->execute();
        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }


    
     public function SelectId($id){

        try{
            $sql = "SELECT * FROM paciente WHERE id = :id";
            $connect = ConnectionFactory::getConnection()->query($sql); 
            $connect->bindValue(":id",$id); // fetch
            $connect ->execute();

            return $connect->fetch(PDO::FETCH_ASSOC);


        }catch(PDOException $ex){
             echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
     }



}
?>