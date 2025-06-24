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

     public function listaPaciente($line){
                $Pacienteline = new Paciente();
                $Pacienteline->setId($line ['id']);
                $Pacienteline->setNome($line ['nome']);
                $Pacienteline->setCpf($line ['cpf']);
                $Pacienteline->setDataNascimento($line ['dataNascimento']);
                $Pacienteline->setTelContato($line ['telContato']);
                $Pacienteline->setEmailContato($line ['emailContato']);
                $Pacienteline->setNomeMae($line ['nomeMae']);
                $Pacienteline->setEndereco($line ['endereco']);
                $Pacienteline->setRemedioContinuo($line ['remedioContinuo']);
                $Pacienteline->setQualRemedio($line ['qualRemedio']);
                $Pacienteline->setPatologia($line ['patologia']);
                $Pacienteline->setQualPatologia($line ['qualPatologia']);
                $Pacienteline->setTecResponsavel($line ['tecResponsavel']);
                $Pacienteline->setHorarioTec($line ['horarioTec']);
                $Pacienteline->setExames($line ['exames']);
                $Pacienteline->setHistoricoMedico($line ['historicoMedico']);
                $Pacienteline->setResultados($line ['resultados']);
        return $Pacienteline;
    }

      public function readPaciente(){
        try{
           
            $sql = "SELECT * FROM paciente";
            $connect = ConnectionFactory::getConnection()->query($sql);
            $connect ->execute();

            $list = $connect->fetchAll(PDO::FETCH_ASSOC);

            $listPaciente= array();
            foreach($list as $line){
                $listPaciente[] = $this->listaPaciente($line);
            }

            return $listPaciente;

        }catch(PDOException $ex){
             echo "<p> Error: "  . $ex->getMessage() . "<p>";
        }
     }

     public function editar(Paciente $paci){
        try{
            $sql = "UPDATE paciente SET 
            nome=:nome,
            cpf=:cpf,
            dataNascimento=:dataNascimento,
            telContato=:telContato,
            emailContato=:emailContato,
            nomeMae=:nomeMae,
            endereco=:endereco,
            remedioContinuo=:remedioContinuo,
            qualRemedio=:qualRemedio,
            patologia=:patologia,
            qualPatologia=:qualPatologia,
            tecResponsavel=:tecResponsavel,
            horarioTec=:horarioTec,
            
            historicoMedico=:historicoMedico,
            resultados=:resultados WHERE id = :id";
            echo $sql;
            echo $paci->__toString();
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":id", $paci->getId());
            $conn->bindValue(":nome", $paci->getNome());
            $conn->bindValue(":cpf", $paci->getCpf());
            $conn->bindValue(":dataNascimento", $paci->getDataNascimento());
            $conn->bindValue(":telContato", $paci->getTelContato());
            $conn->bindValue(":emailContato", $paci->getEmailContato());
            $conn->bindValue(":nomeMae", $paci->getNomeMae());
            $conn->bindValue(":endereco", $paci->getEndereco());
            //$conn->bindValue(":exames", $paci->getExames());
            $conn->bindValue(":remedioContinuo", $paci->getRemedioContinuo());
            $conn->bindValue(":qualRemedio", $paci->getQualRemedio());
            $conn->bindValue(":patologia", 'nao');
            $conn->bindValue(":qualPatologia", $paci->getQualPatologia());
            $conn->bindValue(":tecResponsavel", $paci->getTecResponsavel());
            $conn->bindValue(":horarioTec", 'noite');
            //$conn->bindValue(":exames", 'microbiologia');
            $conn->bindValue(":historicoMedico", $paci->getHistoricoMedico());
            $conn->bindValue(":resultados", $paci->getResultados());
            return $conn->execute(); // Executa o update
        }catch(PDOException $ex){
            echo "<p> Erro ao editar </p> <p> $ex </p>";
        }
    }

    

    public function buscarPorId($id){
        try{
            $sql = "SELECT * FROM paciente WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":id", $id);
            $conn->execute();
            $row = $conn->fetch(PDO::FETCH_ASSOC); // Busca apenas uma linha
            if($row){
                return $this->listaPaciente($row);
            }
            return null; // Retorna null se não encontrar o ID
        }catch(PDOException $ex){
            echo "<p>Erro ao buscar Paciente por ID: </p> <p> {$ex->getMessage()} </p>";
            return null;
        }
    }










}
?>