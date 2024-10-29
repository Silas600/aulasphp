<?php include "recursos-externos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nome {
            color: red;
            font-style: italic;
        }
        .idade-bg {
            background-color: orange;
        }
        .idade-bg-alt {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Revisando o básico</h1>
        </header>
        <hr>
        <ul>
            <?php foreach($tecnologias as $tec): ?>
                <li><?= htmlspecialchars($tec) ?></li>
            <?php endforeach; ?>
        </ul>
        <hr>

        <?php 
        const NOME = "Chapolin Colorado";
        $idade = 25; 
        ?>

        <p>Olá! meu nome é <span class="nome"><?= htmlspecialchars(NOME) ?></span> e tenho <span class="idade-bg"><?= $idade ?></span> anos.</p>
        <p>Olá! meu nome é <span class="nome" style="color: blue;"><?= htmlspecialchars(NOME) ?></span> e tenho <span class="idade-bg-alt"><?= $idade ?></span> anos.</p>
    </div>
</body>
</html>
