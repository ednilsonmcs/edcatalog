<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $conexao = ConexaoBD::conectar();

    $id = $_GET['id'];

    $query = "DELETE FROM produtos WHERE id = :id";

    $stmt = $conexao->prepare($query);

    $stmt->bindParam(':id', $id);

    try {
        $stmt->execute();
        header("Location: list.php");
        exit(); 
    } catch(PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
}
