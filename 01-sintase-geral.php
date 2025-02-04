<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    <style>
        .exemplo {
            color: red;
            border: solid 4px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>

    <?php
    //Geração de strings/textos
      echo "Hoje o Corinthians Perde!";

      //Gerações de tags e atributos
      
      echo "<p>Vai perder de goleada!</p>";
      //Aspas duplas fora, aspas simples dentro(correto)
      echo "<p><abbr title='Sport Club Corinthians Paulista'>SCCP</p>";

      //Aspas duplas/simples dentro e fora (errado)
      //echo "<p><abbr title="Sport Club Corinthians Paulista">SCCP</p>";

      echo "<p><abbr title=\"Sport Club Corinthians Paulista\">SCCP</p>";

      //Aspas simples fora, aspas duplas dentro(correto)
      echo '<p><abbr title="Sport Club Corinthians Paulista">SCCP</p>';


    echo "<h2>Brincando <span class=\"exemplo\">PHP</span> </h2>";

    $saudacao = "Olá!!";
      


    ?>


<script>
    const exemplo = document.querySelector(".exemplo");

    exemplo.addEventListener("click", function(){
        alert(" <?php echo $saudacao; ?>");
            })
</script>


</body>
</html>