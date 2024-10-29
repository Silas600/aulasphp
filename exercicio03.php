<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
li:nth-child(even){ /* Par */
color: blue;
}
li:nth-child(odd){ /* impar  */
color: red;
}
/*  */
</style>
</head>
<body>

<h1>Exercício 03</h1>
<hr>

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]; 
?>

<h2>Meses do Ano</h2>

<ol>

<?php
 foreach($meses as $mes) {
?>

<li> 
<?=$mes?> 
</li>

<?php    
}
?>

</ol>

</body>
</html>
