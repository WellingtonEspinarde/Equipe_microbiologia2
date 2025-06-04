<?php
class ExamesDao {
    public function inserir(Exames $exame) {
        try {
            $sql = "INSERT INTO exames (id, idUsuario, idPaciente, nomeExame, descricao, tipoAmostra, resultado, prioridade)
                    VALUES (:id, :idUsuario, :idPaciente, :nomeExame, :descricao, :tipoAmostra, :resultado, :prioridade)";
            $conn = ConnectionFactory::getConnection();

            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":id", $exame->getId());
            $stmt->bindValue(":idUsuario", $exame->getIdUsuario());
            $stmt->bindValue(":idPaciente", $exame->getIdPaciente());
            $stmt->bindValue(":nomeExame", $exame->getNomeExame());
            $stmt->bindValue(":descricao", $exame->getDescricao()); 
            $stmt->bindValue(":tipoAmostra", $exame->getTipoAmostra());
            $stmt->bindValue(":resultado", $exame->getResultado());
            $stmt->bindValue(":prioridade", $exame->getPrioridade());

            return $stmt->execute();
        } catch (PDOException $ex) {
            error_log("Erro ao inserir exame: " . $ex->getMessage()); // Melhor prática de log
            return false; // Retorna false para indicar falha sem expor erros diretamente ao usuário
        }
    }
    
    public function listarTodos() {
        try {
            // Query para selecionar todos os exames
            $sql = "SELECT id, idUsuario, idPaciente, nomeExame, descricao, tipoAmostra, resultado, prioridade FROM exames";
            
            // Obtendo a conexão com o banco de dados
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            // Preparando a execução da consulta
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Retornando os resultados como um array associativo
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $ex) {
            // Registrando erro para depuração
            error_log("Erro ao listar exames: " . $ex->getMessage());
            return []; // Retorna um array vazio em caso de erro
        }
    }

    public function buscarPorId($id) {
        try {
            $sql = "SELECT * FROM exames WHERE id = :id";
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exame por ID: " . $ex->getMessage());
            return null;
        }
    }
    public function atualizar(Exames $exame) {
        try {
            $sql = "UPDATE exames SET idUsuario = :idUsuario, idPaciente = :idPaciente, nomeExame = :nomeExame, descricao = :descricao, tipoAmostra = :tipoAmostra, resultado = :resultado, prioridade = :prioridade WHERE id = :id";
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":id", $exame->getId());
            $stmt->bindValue(":idUsuario", $exame->getIdUsuario());
            $stmt->bindValue(":idPaciente", $exame->getIdPaciente());
            $stmt->bindValue(":nomeExame", $exame->getNomeExame());
            $stmt->bindValue(":descricao", $exame->getDescricao());
            $stmt->bindValue(":tipoAmostra", $exame->getTipoAmostra());
            $stmt->bindValue(":resultado", $exame->getResultado());
            $stmt->bindValue(":prioridade", $exame->getPrioridade());

            return $stmt->execute();
        } catch (PDOException $ex) {
            error_log("Erro ao atualizar exame: " . $ex->getMessage());
            return false;
        }
    }
    public function excluir($id) {
        try {
            $sql = "DELETE FROM exames WHERE id = :id";
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (PDOException $ex) {
            error_log("Erro ao excluir exame: " . $ex->getMessage());
            return false;
        }
    }
    public function buscarPorNomeExame($nomeExame) {
        try {
            $sql = "SELECT * FROM exames WHERE nomeExame = :nomeExame";
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":nomeExame", $nomeExame);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exame por nome: " . $ex->getMessage());
            return [];
        }
    }
    public function buscarPorIdUsuario($idUsuario) {
        try {
            $sql = "SELECT * FROM exames WHERE idUsuario = :idUsuario";
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":idUsuario", $idUsuario);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exames por ID de usuário: " . $ex->getMessage());
            return [];
        }
    }
    public function buscarPorIdPaciente($idPaciente) {
        try {
            $sql = "SELECT * FROM exames WHERE idPaciente = :idPaciente";
            $conn = ConnectionFactory::getConnection();
            if (!$conn) {
                throw new PDOException("Erro ao obter conexão com o banco de dados.");
            }

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":idPaciente", $idPaciente);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            error_log("Erro ao buscar exames por ID de paciente: " . $ex->getMessage());
            return [];
        }
    }  
}

