<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1>Tabalhando com objetos genéricos</h1>
    <hr>
<?php
//Criando uma intância de uma classe genérica chamada stdClass (Standar Class)
$usuario = new stdClass(); //instância ou objeto

//Adicionando propriedades/atributos ao objeto
$usuario-> nome = "Chapolin Colorado";
$usuario-> idade = 25;
$usuario-> email = "chapolim@gmail.com";
$usuario-> telefones = ["11-2658-6666", "11-9875-5698"];

echo $usuario-> nome;

//Pode ser usado {}ao redor do objeto/propriedade na interpolação
echo "<p><mark>{$usuario-> nome}</mark><p>" ; //interpolação

?>

<h2>Analisando a estrutura do objeto</h2>
<pre><?=var_dump($usuario)?></pre>

<h2>Saída de Dados</h2>
<p>Nome: <?=$usuario->nome?></p>
<p>Idade: <?=$usuario->idade?> anos</p>
<p>Celular: <?=$usuario->telefones[1]?></p>

<hr>

<?php
//Convertendo um objeto em um array associativo
$arrayUsuario = (array) $usuario;
?>

<h3>Analisando o array gerado a partir de um objeto</h3>
<pre><?=var_dump($arrayUsuario)?></pre>

<h2>Convertendo (fazendo um casting) array assossiativo em objeto</h2>

<?php
$aluno = ["nome" => "Fulano", "sobrenome" => "dos Santos"];

$objAluno = (object) $aluno;
?>

<h3>Analisando o objeto gerado a partir de um array</h3>
<pre><?=var_dump($aluno)?></pre>

</body>
</html>