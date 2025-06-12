<?php 
class UsuarioSistemaDao{

    public function inserir(UsuarioSistema $usuario){
        
        try{
            $sql = "INSERT INTO paciente (nome, cpf, email, senha, anoLetivo, voceE )
                            VALUES (:nome, :cpf, :email, :senha, :anoLetivo, :voceE )"; 
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            $conn->bindValue(":nome", $usuario->getNome());
            $conn->bindValue(":cpf", $usuario->getCpf());
            $conn->bindValue(":email", $usuario->getEmail());
            $conn->bindValue(":senha", $usuario->getSenha());
            return $conn->execute();

        }catch(PDOException $ex){
            echo "<p> Erro </p> <p> $ex </p>";
        }
    }
// banco
}
?>