<?php
include_once __DIR__ . "/classe-conexao.php";
class Estoque
{
    private $conn;

    public function cadastrarItem(array $ingredientes): bool
    {
        $colunaIngredientes = array_keys($ingredientes);
        $ingredienteValores = array_map(fn($value) => "'{$value}'", $ingredientes);
        $colunas = implode(',', $colunaIngredientes);
        $placeholder = implode(',', $ingredienteValores);
        $query = "INSERT INTO ingrediente ({$colunas}) VALUES ({$placeholder})";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Ocorreu um erro ao cadastrar item: {$e->getMessage()}";
            return false;
        }
    }

    public function buscarItemPorNome(String $pesquisa): array
    {
        $query = "SELECT * FROM ingredientes WHERE nome LIKE '%$pesquisa%'";
        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Ocorreu um erro ao buscar item, erro: {$e->getMessage()}";
        }
        $payload = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $payload ?? [];
    }

    public function buscarTodosItens()
    {
        $query = "SELECT * FROM ingrediente";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarItemPorId(String $id): array
    {
        $query = "SELECT * FROM ingrediente WHERE ID_ingrediente = $id";
        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao buscar item por id: {$e}";
        }
        $itens  = $stmt->fetch(PDO::FETCH_ASSOC);
        return $itens == [] ? [] : $itens;
    }

    public function atualizarItemPorId(array $payload): bool
    {
        $id = $payload["ID_ingrediente"];
        unset($payload["ID_ingrediente"]);
        $keys = array_keys($payload);
        $colunas = implode(', ', $keys);
        $query = "UPDATE ingrediente SET {$colunas} WHERE ID_ingrediente = {$id}";
        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao atualizar item: {$e}";
            return false;
        }
    }

    public function excluirItem(int $id): bool
    {
        $query = "DELETE FROM ingrediente WHERE id_ingrediente = $id";
        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erro ao deletar ingrediente: " . $e->getMessage();
            return false;
        }
    }

    public function __construct()
    {
        $database = new ConexaoBanco();
        $this->conn = $database->getConexao();
    }
}