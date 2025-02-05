<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>

<body>
    <h1>Exercício 03 (Condicionais)</h1>

    <?php

    $valor_compra = 4500;
    $desconto = 0;

    if ($valor_compra > 5000) {
        $desconto = 0.15;
    } elseif ($valor_compra > 3000) {
        $desconto = 0.10;
    } elseif ($valor_compra > 1000) {
        $desconto = 0.05;
    }

    $valor_com_desconto = $valor_compra - ($valor_compra * $desconto);
    
    $valor_final_formatado = number_format($valor_com_desconto, 2, ',', '.');
    
    ?>

    <p>O valor da compra feita é <?=$valor_compra?> e o desconto obtido foi <?=$desconto?></p>

</body>

</html>