<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Revisando o básico</h1>
    <hr>

<?php 
/* criar duas variáveis e /ou contantes */
const NOME = "Chapolin Colorado";
$idade = 25; 

/* Exibir no HTML uma frase da seguinte forma */
// olá meu nome é Chapolin Colorado e tenho 25 anos.
// O nome deve aparecer em itálico e com cor diferente no texto 
// A idade deve aparecer apenas com cor de fundo diferente.
?>

<p>Olá! meu nome é <i style="color: red;"><?=NOME?></i> e tenho <span style="background-color: orange;"><?= $idade?></span> anos.</p>

<p> olá! meu nome é <i><?=NOME?></i> e tenho <span><?=$idade?></span></p>





</body>
</html>
