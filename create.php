<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/global.css">
    <title>Cadastrar</title>

    <style>
        /* Style inputs, select elements and textareas */
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        /* Style the label to display next to the inputs */
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        fieldset {
            border-style: none;
        }

        /* Style the submit button */
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        /* Style the container */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        /* Floating column for labels: 25% width */
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        /* Floating column for inputs: 75% width */
        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="general-container ">
        <?php
        include "common/sidebar.php";
        ?>
        <div class="content">
            <h1>Cadastro de produtos</h1>

            <div class="container">
                <form action="action_page.php">

                    <div class="row">
                        <div class="col-25">
                            <label for="name">Nome:</label>
                        </div>
                        <div class="col-25">
                            <input type="text" name="name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="description">Descrição:</label>
                        </div>
                        <div class="col-25">
                            <input type="text" name="description">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="brandName">Nome da marca:</label>
                        </div>
                        <div class="col-25">
                            <input type="text" name="brandName">
                        </div>
                    </div>

                    <div class="row">
                        <fieldset>
                            <div class="col-25">
                                <legend>Está ativo?</legend>
                            </div>
                            <div class="col-25">
                                <p>
                                    <input type="radio" name="isActive" id="isActive" value="true" />
                                    <label for="isActive">Sim</label>
                                </p>
                            </div>
                            <div class="col-25">
                                <p>
                                    <input type="radio" name="isActive" id="isntActive" value="false" />
                                    <label for="isntActive">Não</label>
                                </p>
                            </div>
                        </fieldset>
                    </div>

                </form>
            </div>

        </div>
    </div>
</body>

</html>