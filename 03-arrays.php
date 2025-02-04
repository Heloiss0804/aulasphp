<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Arrays (Vetores e Matrizes)</title>
</head>
<body>
    <h1>trabalhando com arrays </h1>
    <hr>

    <h2>Arrays numéricos/indexados</h2>

<?php
//Sintaxe com colchetes
$filmes = ["Vingadores", "Barbie", "Mulher Maravilha"];

//sintaxe com função array()
$cores = array ("Azul", "Vermelho", "Verde");

//Sintaxe de atributos manual usando os índeces
$comidas[0] = "Brigadeiro";
$comidas[1] = "Coxinha";
$comida[2] = "Paçoca";

//Constantes de array
define ("Unidades", ["penha", "Tatuapé"]);
const FRUTAS = ["Morango", "Pêra"];

?>

<h3>Acessando os dados </h3>
<ul>
    <li>Filmes que mais curto: <?=$filmes[1]?></li>
    <li> Cor que mais amo: <?=$cores[2]?></li>
    <li> Eu amo: <?=$comidas[0]?></li>
    <li>Estamos no Senac<?=Unidades[0]?></li>
    <li>Vou fazer uma caipirinha de:  <?=FRUTAS[1]?></li>
</ul>

<h2>Arrays Associativos</h2>
<?php
$curso = [
    "titulo" => "Gatronomia",
    "carga_horaria" => 200,
    "descricao" => "Aprender a esquentar água e fazer ovo cozido"
];

?>

<h3>Acessando os dados</h3>
<p>Nome do cruso: <?=$curso["titulo"]?> </p>
<p>Carga Horarioa: <?=$curso["carga_horaria"]?> </p>
<p>Descrição: <?=$curso["descricao"]?> </p>

<?php
define("EMPRESA",
[
   "nome" => "Biribinha Informática",
   "ano_fundacao" => 2021 
]
);

echo EMPRESA ["nome"];

echo "<br><br>";

const OUTRA_EMPRESA = ["nome" => "ABC TI", "ano_fundacao" => 2022];
echo OUTRA_EMPRESA  ["nome"]

?>

<h2>Matriz(array dentro de array)</h2>

<?php
$planoDeEstudos = [
["JS Avançado", "Node.js", "Next.js"],
["PHP", "Orientações a Objetos"],
["Teoria das Cores", "Photoshop", "UX/UI", "Motion Design"]
];

?>

<h3>Acessando os dados</h3>
<p>Vou estudar nos próximos meses:
    <?=$planoDeEstudos[0][2]?>,<?=$planoDeEstudos[1][0]?> e  <?=$planoDeEstudos[2][3]?>
</p>

<hr>

<h2>Funções de análise/depuração/debug de estruturas de dados</h2>

<h3><code>print_r()</code></h3>
<?=print_r($filmes)?>
<pre> <?=print_r($filmes)?></pre>

<h3><code>var_dump()</code></h3>
<pre> <?=var_dump($filmes)?></pre>
<pre> <?=var_dump($curso)?></pre>
    
</body>
</html>