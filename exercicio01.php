<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        exercicio 01
    </h1>

    <?php // array associativo
    $dados = [
        "Nome" => "chapolin.colorado",
        "Senha" => "123teste",
        "Idade"  => 30,
        "Cidade" => "São Paulo",
         /*array numérico/indexado*/
        // "Telefones" => ["11-2135-0300", "11-91234-5678"]
         "Telefones" => array("11-2135-0300" , "11-91234-5678")
    ];
    ?>

    <ol>
        <li>Nome de usuário:<?= $dados["Nome"] ?></li>
        <li>Senha:<?= $dados["Senha"] ?></li>
        <li>Idade:<?= $dados["Idade"] ?></li>
        <li>Cidade:<?= $dados["Cidade"] ?></li>
        <li>Telefone:<?= $dados["Telefones"][0] ?></li>
    </ol>

    
















    


    


</body>
</html>