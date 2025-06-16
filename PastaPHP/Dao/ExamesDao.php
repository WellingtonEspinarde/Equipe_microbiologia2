<?php
class ExamesDao {
    public function inserir(Exames $exame) {
        try {
            $sql = "INSERT INTO exames (id, idUsuario, idPaciente, nomeExame, descricao, tipoAmostra, resultado, prioridade)
                    VALUES (:id, :idUsuario, :idPaciente, :nomeExame, :descricao, :tipoAmostra, :resultado, :prioridade)";
            $conn = ConnectionFactory::getConnection()->prepare($sql);

            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $conn->bindValue(":id", $exame->getId());
            $conn->bindValue(":idUsuario", $exame->getIdUsuario());
            $conn->bindValue(":idPaciente", $exame->getIdPaciente());
            $conn->bindValue(":nomeExame", $exame->getNomeExame());
            $conn->bindValue(":descricao", $exame->getDescricao()); 
            $conn->bindValue(":tipoAmostra", $exame->getTipoAmostra());
            $conn->bindValue(":resultado", $exame->getResultado());
            $conn->bindValue(":prioridade", $exame->getPrioridade());

            return $conn->execute();
        } catch (PDOException $ex) {
            error_log("Erro ao inserir exame: " . $ex->getMessage()); // Melhor prática de log
            return false; // Retorna false para indicar falha sem expor erros diretamente ao usuário
        }
    }  
    public function listar() {
        try {
            // Query para selecionar todos os exames
            $sql = "SELECT id, idUsuario, idPaciente, nomeExame, descricao, tipoAmostra, resultado, prioridade FROM exames";
            
            // Obtendo a conexão com o banco de dados
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }
            
            $conn->execute();

            // Retornando os resultados como um array associativo
            return $conn->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $ex) {
            // Registrando erro para depuração
            error_log("Erro ao listar exames: " . $ex->getMessage());
            return []; // Retorna um array vazio em caso de erro
        }
    }

    public function buscarPorId($id) {
        try {
            $sql = "SELECT * FROM exames WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            
            $conn->bindValue(":id", $id);
            $conn->execute();

            return $conn->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exame por ID: " . $ex->getMessage());
            return null;
        }
    }
    public function atualizar(Exames $exame) {
        try {
            $sql = "UPDATE exames SET idUsuario = :idUsuario, idPaciente = :idPaciente, nomeExame = :nomeExame, descricao = :descricao, tipoAmostra = :tipoAmostra, resultado = :resultado, prioridade = :prioridade WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            
            $conn->bindValue(":id", $exame->getId());
            $conn->bindValue(":idUsuario", $exame->getIdUsuario());
            $conn->bindValue(":idPaciente", $exame->getIdPaciente());
            $conn->bindValue(":nomeExame", $exame->getNomeExame());
            $conn->bindValue(":descricao", $exame->getDescricao());
            $conn->bindValue(":tipoAmostra", $exame->getTipoAmostra());
            $conn->bindValue(":resultado", $exame->getResultado());
            $conn->bindValue(":prioridade", $exame->getPrioridade());

            return $conn->execute();
        } catch (PDOException $ex) {
            error_log("Erro ao atualizar exame: " . $ex->getMessage());
            return false;
        }
    }
    public function excluir($id) {
        try {
            $sql = "DELETE FROM exames WHERE id = :id";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            
            $conn->bindValue(":id", $id);
            return $conn->execute();
        } catch (PDOException $ex) {
            error_log("Erro ao excluir exame: " . $ex->getMessage());
            return false;
        }
    }
    public function buscarPorNomeExame($nomeExame) {
        try {
            $sql = "SELECT * FROM exames WHERE nomeExame = :nomeExame";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            
            $conn->bindValue(":nomeExame", $nomeExame);
            $conn->execute();

            return $conn->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exame por nome: " . $ex->getMessage());
            return [];
        }
    }
    public function buscarPorIdUsuario($idUsuario) {
        try {
            $sql = "SELECT * FROM exames WHERE idUsuario = :idUsuario";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $conn->bindValue(":idUsuario", $idUsuario);
            $conn->execute();

            return $conn->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exames por ID de usuário: " . $ex->getMessage());
            return [];
        }
    }
    public function buscarPorIdPaciente($idPaciente) {
        try {
            $sql = "SELECT * FROM exames WHERE idPaciente = :idPaciente";
            $conn = ConnectionFactory::getConnection()->prepare($sql);
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            
            $conn->bindValue(":idPaciente", $idPaciente);
            $conn->execute();

            return $conn->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exames por ID de paciente: " . $ex->getMessage());
            return [];
        }
    }  
}

