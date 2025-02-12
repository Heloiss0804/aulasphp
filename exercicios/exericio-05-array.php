<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <?php

function calcularMedia($valor1,$valor2,$valor3){
   return ($valor1 + $valor2 + $valor3)/3; 
}

function verificar_situacao(float $valorMedia):string {
    if($valorMedia >=7){
        return "aprovado";
    }else {
        return "reporovado";

    }
}
 // Lista de alunos com suas notas
$alunos = [
    [
        'nome' => 'Marcio',
        'nota1' => 8.0,
        'nota2' => 7.5,
        'nota3' => 9.0
    ],
    [
        'nome' => 'Vanessa',
        'nota1' => 5.0,
        'nota2' => 6.0,
        'nota3' => 6.5
    ],
    [
        'nome' => 'Pedro',
        'nota1' => 9.5,
        'nota2' => 8.0,
        'nota3' => 7.5
    ],
    [
        'nome' => 'Ana',
        'nota1' => 4.5,
        'nota2' => 5.0,
        'nota3' => 6.0
    ],
    [
        'nome' => 'Carlos',
        'nota1' => 7.0,
        'nota2' => 8.0,
        'nota3' => 7.5
    ]
 ];
 ?>   

 <?php
 foreach ($alunos as $aluno){
    $media = calcularMedia($aluno["nota1"],$aluno["nota2"], $aluno["nota3"]);
    $situacao = verificar_situacao($media)
    ?>
     
  <p>Aluno(a) <?=$aluno["nome"] ?> teve as notas <?=$situacao?></p>  
  <hr>
<?php
 }
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>