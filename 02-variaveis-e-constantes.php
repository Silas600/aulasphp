<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>
    <h2>Declaração e saída usando echo</h2>
    <?php
    //Variáveis
    $curso = "Progamador Web";
    $ano = 2024;
    $area = "Back-End";

    // Estamos no Programador Web em 2024

    // saída interpolada (Usando aspas duplas)
    echo "<p> Estamos no $curso em $ano.";

    //com aspas simples, PHP NÃO interpreta variável
    echo '<p> Estamos no $curso em $ano.';

    // constantes 
define("AUTOR","Fulano"); // tradicional, antiga
const EMPRESA = "ABC TECNOLOGIA"; // nova, morderna

   //Fulano trabaljha na empresa abc Tecnologia
   // (usando concatenação [ ponto final])
    echo "<p>".AUTOR." Trabalha na empresa ".EMPRESA."<p>";
?>

</body>
</html>