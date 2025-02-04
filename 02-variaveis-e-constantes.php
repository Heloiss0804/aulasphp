<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memoria </title>
</head>
<body>

<h1>Usando variáveis e constantes</h1>
<hr>

<?php
//Variáveis

$curso = "Téc. em Informática para Internet"; //string
$ano = 2025; //inteiro
$preco = 2500.25; //real (float, decimal)

//Usando concatenação
echo "<h2>Saída de dados usando echo na sintaxe COMPLETA</h2>";
echo "<p>Estamos no curso ".$curso. "no ano letivo de ".$ano. " </p>";

//Interpolação (Obrigatorio ASPAS)
echo "<p>Estamos no curso $curso no ano letivo de $ano  </p>";

// Com aspas simples, interpelação NÂO FUNCONA (vira texto)
echo '<p>Estamos no curso $curso no ano letivo de $ano </p>';

?>

<hr>
<h2>Saída de dados usando echo na sintaxe ABREVIADA/Curta</h2>
<p>Estamos no curso <?=$curso?> no ano letivo de  <?=$ano?></p>

<hr>

<?php
//Contantes 
// Sintaxe 1 (mais antiga): usando a função define()
define("MEU_NOME","Heloisa G. Bussi");

//Sintaxe 2 (mais moderna): usando a palavra-chave onst
const UNIDADE = "Penha";
?>
<h2>Saída de dados constantes</h2>
<p>Me chamo <?=MEU_NOME?> e estou no Senac <?=UNIDADE?> </p>

<h2>Sintaxe heredoc e nowdoc</h2>
<p><i> Úteis para strings de múltiplas linhas </i></p>

<?php
//Exemplo usando heredoc
$nome = "Fulano Da Silva";

$textoHeredoc = <<<TEXTO
<ul>
<li>Nome: $nome </li>
<li style="color:red">Texto com CSS</li>
</ul>

TEXTO;

//Exemplo Nowdoc
$comida = "Lasanha";

$textoNowdoc = <<<'TEXTO'
Olá!Bem-Vindo(a) ao PHP.
Estamos testando a sintaxe <b>nowdoc</b>.
Eu adoro $comida.
TEXTO;
?>

<div>
    <h3>Saída com heredoc</h3>
    <?=$textoHeredoc?>


</div>

<div>
    <h3>Saída com Nowdoc</h3>
    <?=$textoNowdoc?>
</div>
    
</body>
</html>