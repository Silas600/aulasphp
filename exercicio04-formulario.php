<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>Exercício 04 (formulário)</h1>
    <hr>
    <form autocomplete="off" action="exercicio04-processamento.php" method="post">
        <p>
            <label for="produto">Produto:</label>
            <input required type="text" name="produto" id="produto">
        </p>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <!-- não apague este <option> vazio -->
                <option value=""></option>

                <?php
                $fabricantes = ["HP", "Microsoft", "Samsung", "LG"];
                foreach ($fabricantes as $fabricante) {
                ?>
                    <option value="<?= $fabricante ?>"><?= $fabricante ?> </option>
                <?php
                }
                ?>

            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>

</html>