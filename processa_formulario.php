<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = ConexaoBD::conectar();

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $nomeMarca = $_POST['nomeMarca'];
    $ativo = $_POST['ativo'] == "true" ? 1 : 0;

    $query = "INSERT INTO produtos (nome, descricao, nomeMarca, ativo) VALUES (:nome, :descricao, :nomeMarca, :ativo)";

    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':nomeMarca', $nomeMarca);
    $stmt->bindParam(':ativo', $ativo);

    try {
        $stmt->execute();
        header("Location: list.php");
        exit(); 
    } catch(PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
}
