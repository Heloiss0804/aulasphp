<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 >Exercício 03 (Condicionais)</h1>

    <?php

    $valor_compra = 4500;
    $desconto = 0;

    if ($valor_compra > 5000) {
        $desconto = 0.15;
    } elseif ($valor_compra > 3000) {
        $desconto = 0.10;
    } elseif ($valor_compra > 1000) {
        $desconto = 0.05;
    } else{
        $desconto = 0;
    }

    $valor_com_desconto = $valor_compra - ($valor_compra * $desconto);
    
    $valor_final_formatado = number_format($valor_com_desconto, 2, ',', '.');
    
    ?>

    <p>O valor da compra feita é <?=$valor_compra?> e o desconto obtido foi <?=$valor_final_formatado?></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

</body>

</html>