<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Exercício 2</h1>
        <hr>
        <?php
        $salarioAntigo = 1000000; 
        $aumento = 0;

       
        if ($salarioAntigo < 500) {
            $aumento = $salarioAntigo * 0.15; 
        } elseif ($salarioAntigo <= 1000) {
            $aumento = $salarioAntigo * 0.10; 
        } else {
            $aumento = $salarioAntigo * 0.05;
        }

        
        $salarioReajustado = $salarioAntigo + $aumento;

        
        $salarioAntigoFormatado = number_format($salarioAntigo, 2, ',', '.');
        $salarioReajustadoFormatado = number_format($salarioReajustado, 2, ',', '.');
        ?>

        <p>Salário antigo: <b>R$ <?= $salarioAntigoFormatado ?></b></p>
        <p>Salário reajustado: <b>R$ <?= $salarioReajustadoFormatado ?></b></p>

        

    </div>
</body>
</html>
