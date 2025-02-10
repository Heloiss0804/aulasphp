<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="alert alert-success-primary">Relembrando operadores Lógicos</h1>
    <hr >

    <h2  class="alert alert-danger" role="alert">&& (E/AND)</h2>
    <p class="alert alert-warning" role="alert"><i>Todas as condições precisam ser <b>VERDADEIRAS/TRUE</b></i></p>
<?php
// Avaliar um aluno mediante média e faltas 
$media = 9.5;
$faltas = 10;

if ($media >= 7 && $faltas <= 10){
    ?>
    
    <p class="alert-heading">Aprovado!</p>
    <?php
}else {
    ?>
    <p>Reprovado!</p>
    <?php
}
?>
 <hr>

    <!-- o símbolo | é chamado de pipe -->
    <h2 class="alert alert-warning" role="alert">|| (OU/OR)</h2>
    <p><i>Basta que apenas uma condição seja <b>VERDADEIRA/TRUE</b></i></p>
<?php
//Dar um desconto a um cliente que seja VIP ou qye tenha cupom
$clientesVIP = true; //valor/tipo lógico/bolean 
$temCupom = false;

if ($clientesVIP || $temCupom){
    ?>

    <p>Desconto aplicado </p>
    <?php
}else {
    ?>
    <p>Sem desconto!</p>
<?php
}
?>    
<hr>

    <h2 class="alert alert-success" role="alert">! (NÃO/NOT)</h2>
    <p><i>É uma inversão de lógica: VERDADEIRA vira <b>FALSO</b>, FALSO vira <b>VERDADEIRO</b></i></p>
<?php
//Se o usuário NÃO ESTIVER logado, exibir o lunk/botão de LOGIN.
$usuarioLogado = false;

if (!$usuarioLogado) {
  echo "<a href=\"login.php\">Login</a>";
  
}else {
    echo "<span>Bem-Vindo ao sistema!</span>";

}
?>    

<hr>
<h2 class="alert alert-dark" role="alert">Usando os 3 operadores combinados para uma lógica mais elaborada</h2>

<?php
//Para entrar numa festa é necessário os seguintes criterios:

// - Idade mínima de 18 anos
// - Ou estar acompanhado dos pais
// - E não estar bêbado

//Variáveis
$idade = 16;
$acompanhadoDosPais = true;
$estaBebado = false;

if(($idade >= 18 || $acompanhadoDosPais) && !$estaBebado) 

{
?>
 <p>Entrada permitida!<p>

 <?php      
}else{
    ?>
    <p>Entrada negada!</p>
<?php
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>