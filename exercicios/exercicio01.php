<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(117, 30, 30, 0.57);
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .informacoes {
            background-color: rgb(255, 255, 255);
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        .destaque {
            color: #2a9d8f;
            font-weight: bold;
        }

        .data {
            font-size: 12px;
            color: #6c757d;
            text-align: right;
        }
    </style>

</head>

<body>
    <?php


    $dataDeHoje = date('d/m/Y');
    
    $nomePessoa = "Heloisa";
    $nomeCurso = "Php";
    $cargaHoraria = 180;
    $limiteFaltas = $cargaHoraria * 0.25;
    ?>

    <div class="informacoes">
        <p><span class="destaque">Nome:</span> <?= $nomePessoa; ?></p>
        <p><span class="destaque">Curso:</span> <?= $nomeCurso; ?></p>
        <p><span class="destaque">Carga Horária:</span> <?= $cargaHoraria . " horas"; ?></p>
        <p><span class="destaque">Limite de Faltas:</span> <?= $limiteFaltas; ?> faltas</p>
        <p class="data">Data de hoje: <?= $dataDeHoje; ?></p>

    </div>  
     
<?php
//Diferenças entre const/define e variavel
$exemplo = 10; 
echo $exemplo;

echo "<br><br>";

$exemplo = 150; 
echo $exemplo;

echo "<br><br>";

//contante 
const Exemplo = 10;
echo Exemplo;

//Exemplo = 200 // dá errado pois constantes NÃO PODEM SER MODIFICADAS

?>
    

</body>

</html>