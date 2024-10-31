<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário COM PHP</title>
</head>
<body>
    <h1>formulário e processamento juntos</h1>
    <hr>

<?php
/* se o botão continuar foi acionado */
if(isset($_POST['continuar'])){
    //Pegamos o nome digitado
    $nome = $_POST['nome'];
?>
    <h2>Bem-vindo(a), <?=$nome?>! 🍷 🗿  </h2>

<?php
}else {
?>

    <!-- Mantenha o action ao programar o PHP junto com o formulário -->
    <form action="" method="post" autocomplete="off">
        <label for="">Qual o seu nome?</label>
        <input required="text" name="nome" id="nome">
        <button name="continuar" type="submit">Continuar</button>
    </form>
<?php
}
?>

</body>
</html>