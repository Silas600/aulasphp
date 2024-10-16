<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>

<body>
    <h1>Arrays no PHP</h1>
    <hr>

    <?php
    // array numérico/indexado
    $bandas = ["Slayer", "Nightwish", "Pink Floyd", "Savatage"];
    $cursos = array ("Node.js", "Design", "Nutrição");
    ?>

    <h2>Acessando os dados do array</h2>
    <p>Rock progressivo: <?=$bandas[2]?> </p>
    <p>Ontem estivemos com a turma de <?=$cursos[2]?></p>

    <hr>
<?php
// array associativo
$filme = [
    "titulo" => "Senhor dos anéis",
    "autor" => "J.R.R Tolkien",
    "lancamento" => 2001,
    "genero" => "fantasia"

];
?>

<h2> Acessando os dados do array associativo</h2>

<p> O filme <?= $filme["titulo"]?> foi lançado em <?=$filme["lancamento"]?>.</p>

<hr>

<h2>comandos úteis para análise de Arrays</h2>

<h3>print_r (nomeArray)</h3>
<pre><?=print_r($bandas)?></pre>

<h3>var_dump(nomeArray)</h3>
<pre><?=var_dump($bandas)?></pre>




</body>
</html>
