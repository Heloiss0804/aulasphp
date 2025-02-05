<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(VERSÃO 2)PHP - Condicionais</title>
    <style>
        .compras {
            color: red;
        }

        .urgente {
            color: red;
            background-color: yellow;
        }

        .normal {
            color: darkgreen;
        }
    </style>
</head>

<body>
    <h1>(VERSÃO 2)Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>

    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>
        <p><?=$numero?> é maior que 1 </p>
    <?php
    }
    ?>
       <hr>
       <h2>Composta usando <code>if/else</code></h2>
    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 10; //o que temos
    $qtdCritica = 5; // minimo necessário

    echo "<h3>$produto</h3>";
    echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

    if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class=\"compras\">É necessário comprar!</p>";

        //Condicional Aninanda

        if ($qtdEmEstoque === 0) {
            echo "<p class=\"urgente\"><strong>🤟URGENTE🤟 </strong></p>";
        }
    } else {
        echo "<p class=\"normal\">Estoque normal </p>";
    }
    ?>

    <h2>Encadeada usando <code>if/elseif/else</code></h2>
    <!-- Verificar a idade de uma pessoa e determinar se ela é criança,adolescente, adulta ou idosa. -->

    <?php
    $idade = 65;
    if ($idade <= 12) {
        echo "<p>Criança 👼</p>";
    } elseif ($idade <= 17) {
        echo !"<p>Adolescente 😒";
    } elseif ($idade <= 59) {
        echo "<p>Adulto 🤦‍♀️</p>";
    } else {
        echo "<p> Idoso 👴";
    };

    ?>





</body>

</html>