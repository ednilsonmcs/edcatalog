<?php
require_once 'conexao.php';

$conexao = ConexaoBD::conectar();

try {
    $stmt = $conexao->query("SELECT * FROM produtos");
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Erro" . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/global.css">
    <title>Listar</title>
    <style>
        /* spacing */

        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 3px solid #000016;
        }

        thead th:nth-child(1) {
            width: 10%;
        }

        thead th:nth-child(2) {
            width: 20%;
        }

        thead th:nth-child(3) {
            width: 30%;
        }

        thead th:nth-child(4) {
            width: 20%;
        }

        thead th:nth-child(5) {
            width: 10%;
        }

        thead th:nth-child(6) {
            width: 5%;
        }

        thead th:nth-child(7) {
            width: 5%;
        }

        th,
        td {
            padding: 20px;
        }

        tbody tr:nth-child(odd) {
            background-color: #000016;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #fff;
        }

        tbody tr {
            background-image: url(noise.png);
        }
    </style>
</head>

<body>
    <div class="general-container ">
        <?php
        include "common/sidebar.php";
        ?>
        <div class="content">

            <table>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Nome da marca</th>
                        <th scope="col">Está ativo?</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $products = [
                        [
                            'id' => '0001',
                            'name' => 'Bola de Basquete',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                        [
                            'id' => '0002',
                            'name' => 'Bola de Tênis',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                        [
                            'id' => '0003',
                            'name' => 'Bola de Vôlei',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                        [
                            'id' => '0004',
                            'name' => 'Bola de Futebol',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                        [
                            'id' => '0005',
                            'name' => 'Chuteira',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                        [
                            'id' => '0006',
                            'name' => 'Basqueteira',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                        [
                            'id' => '0007',
                            'name' => 'Skate',
                            'description' => 'Bola de basquete tamanho adulto. Material de couro. Garantia 2 anos.',
                            'brandName' => 'Wilson',
                            'isActive' => 'Sim'
                        ],
                    ];


                    for ($i = 0; $i < sizeof($resultados); $i++) {
                        $ativo = ($resultados[$i]['ativo'] == 1) ? 'Sim' : 'Não';

                        echo '
                                <tr>
                                    <td>' . $resultados[$i]['id'] . '</td>
                                    <td>' . $resultados[$i]['nome'] . '</td>
                                    <td>' . $resultados[$i]['descricao'] . '</td>
                                    <td>' . $resultados[$i]['nomeMarca'] . '</td>
                                    <td>' . $ativo . '</td>
                                    <td>
                                        <a href="update.php?id=' . $resultados[$i]['id'] . '">
                                            <img class="icon-link-image" src="images/9004815_add_file_document_page_icon.svg" />
                                        </a>
                                    </td>
                                    <td>
                                        <a href="processa_delecao.php?id=' . $resultados[$i]['id'] . '">
                                            <img class="icon-link-image" src="images/9004828_cross_delete_remove_cancel_icon.svg" />
                                        </a>
                                    </td>
                                </tr>';
                    }
                    ?>
                </tbody>
                <?php

                    echo '
                            <tfoot>
                                <tr>
                                    <th scope="row" colspan="3">Total albums</th>
                                    <td colspan="2">' . sizeof($resultados) . '</td>
                                </tr>
                            </tfoot>';

                ?>

            </table>

        </div>
    </div>
</body>

</html>