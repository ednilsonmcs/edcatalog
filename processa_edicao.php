<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = ConexaoBD::conectar();

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $nomeMarca = $_POST['nomeMarca'];
    $ativo = $_POST['ativo'] == "true" ? 1 : 0;

    $query = "UPDATE produtos SET nome = :nome, descricao = :descricao, nomeMarca = :nomeMarca, ativo = :ativo WHERE id = :id";

    $stmt = $conexao->prepare($query);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':nomeMarca', $nomeMarca);
    $stmt->bindParam(':ativo', $ativo);
    $stmt->bindParam(':id', $id);

    try {
        $stmt->execute();
        header("Location: list.php");
        exit(); 
    } catch(PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
}
