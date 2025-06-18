<?php
class PacienteDao{

    public function inserir(Paciente $paci){
        
        try{
            $sql = "INSERT INTO paciente (nome, cpf, dataNascimento, telContato, emailContato, nomeMae, endereco, remedioContinuo, qualRemedio, patologia, qualPatologia, tecResponsavel, horarioTec, exames, historicoMedico, resultados)
                VALUES (:nome, :cpf, :dataNascimento, :telContato, :emailContato, :nomeMae, :endereco, :remedioContinuo, :qualRemedio, :patologia, :qualPatologia, :tecResponsavel, :horarioTec, :exames, :historicoMedico, :resultados)"; 
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $paci->getNome());
            $conn->bindValue(":cpf", $paci->getCpf());
            $conn->bindValue(":dataNascimento", $paci->getDataNascimento());
            $conn->bindValue(":telContato", $paci->getTelContato());
            $conn->bindValue(":emailContato", $paci->getEmailContato());
            $conn->bindValue(":nomeMae", $paci->getNomeMae());
            $conn->bindValue(":endereco", $paci->getEndereco());
            $conn->bindValue(":exames", $paci->getExames());
            $conn->bindValue(":remedioContinuo", $paci->getRemedioContinuo());
            $conn->bindValue(":qualRemedio", $paci->getQualRemedio());
            $conn->bindValue(":patologia", $paci->getPatologia());
            $conn->bindValue(":qualPatologia", $paci->getQualPatologia());
            $conn->bindValue(":tecResponsavel", $paci->getTecResponsavel());
            $conn->bindValue(":horarioTec", $paci->getHorarioTec());
            $conn->bindValue(":historicoMedico", $paci->getHistoricoMedico());
            $conn->bindValue(":resultados", $paci->getResultados());
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