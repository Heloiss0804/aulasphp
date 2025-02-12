<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 05 (Funções) - 11/02/2025</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
 
</head>
<body>
 
  <div class="container">
   
<?php
$nota1 = 9;
$nota2 = 10;
$nota3 = 10;
 
$total = $nota1 + $nota2 + $nota3;
 
//$media = $total/3;
 
?>
 
 
 
<?php
$media = fn(float $total): float => $total/3;
 
$resultado = $media($total);
 
?>
 
<?php
 
function verificar_situacao($resultado):string {
  if ($resultado >=7) {
   return '<span class="badge text-bg-success">Aprovado</span>';
  } else {
    return '<span class="badge text-bg-danger">Reprovado</span>';
  }
 
}
 
?>
 
<?php
$mediafinal = number_format($media($total), 2, ".",",");
?>
 
 
 
  <p>A média do aluno tem a nota <?=$mediafinal?> o status dele é <?=verificar_situacao($resultado)?></p>
 
 
 
  </div>
 
 
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
 
 
</body>
</html>
 