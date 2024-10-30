<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1>Processamento dos dados vindos do formulário HTML</h1>

<?php
/* capturando os dados atravéis do array $_POST e guardando CADA UM em variável.*/
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$mensagem = $_POST["mensagem"];

if(empty ($nome) || empty ($email) ){
?>

<p>
    Você deve preencher <b>nome</b> e <b>e-mail</b>
</p>

<?php
} else{
 ?> 


<h2>Dados recebidos</h2>
<ul>
    <li>nome:<?=$nome?></li>
    <li>E-mail:<?=$email?></li>
    <li>Data de nascimento:<?=$nascimento?></li>
    <li>Mensagem:<?=$mensagem?></li>

<?php if(!empty ($nascimento)){?>

<li>data de nascimento: <?=$nascimento?></li>
<?php } ?>

<?php if(!empty ($mensagem)){?>
<li>Mensagem: <?=$Mensagem?></li>
<?php } ?>

</ul>

<?php } ?>

</body>
</html>