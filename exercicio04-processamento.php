<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (Dados)</title>
    <title>Exercício 04 (formulário)</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>

</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->


<?php
// Capturando os dados do formulário
$produto = $_POST["produto"];
$fabricante = $_POST["fabricante"];
$preco = 'R$'. number_format($_POST["preco"], 2, ',', '.');
$descricao = $_POST["descricao"];
?>



<ul>
    <?php
    if(empty($produto)){
    ?>
        <p class="alert alert-danger">Campo obrigatório</p>
    <?php
    }
    ?>

    <?php
    if(empty($preco)){
    ?>
     <p class="alert alert-danger">Campo obrigatório</p>
    <?php
    }
    ?>


    <li><?=$produto?></li>
    <li><?=$fabricante?></li>
    <li><?=$preco?></li>
    <li><?=$descricao?></li>
</ul>

</body>
</html>