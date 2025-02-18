<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Processa usando Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Processa usando Post</h1>
        <hr>
        <?php
          if (empty($_POST["nome"])|| empty ($_POST["email"])) {?>
          <p>"Por favor, preencha os campos nome e e-mail"</p>

          <?php }  else { 
         
            
           


        //Capturando os dados transmitidos
        $nome = $_POST['nome'];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST["mensagem"];


           

        //Capturando os options

        //Solução 1: aplicar um ternário checando se existe algum interesse
        // $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];

        //Solução 2: usando o operador de coalecência nula ??
        //Se houver interesses,os armazene.Caso contrário, guarde array vazio.

        $interesses = $_POST["interesses"] ?? [];

        $inf = $_POST["informativos"] ?? [];

      


        ?>
         
         <!-- Exibindo -->
        <h2>Dados</h2>
        <ul>
            


     <li>Nome: <?= $nome ?></li>
     <li>E-mail: <?= $email ?></li>

            <li>Nome: <?= $nome ?></li>
            <li>E-mail: <?= $email ?></li>
            <li>Idade: <?= $idade ?></li>
           
            <?php if (!empty($informativos)){?>
                <li>Receber informativos: <?=$inf?></li>
            <?php } ?>

            <li>Messagem - usando <code>implode()</code>:
                <!-- Tranformamos o arrays em string -->
                <?= implode(",", $interesses) ?>
            </li>
            <!-- Usamos o empty com versão de logíca (operador ! de negação.)
             Portanto, se NÃO ESTÁ vazio, mostre os interesses. -->
            <?php if ( !empty($interesses)) { ?>
                <li>Interesses - usando <code>foreach()</code>:
                    <ul>
                        <?php foreach ($interesses as $interesse) { ?>
                            <li><?= $interesse ?></li>
                        <?php

                        } ?>
                    </ul>

                </li>
            <?php } ?>

            <li>Messagem: <?= $mensagem ?></li>
        </ul>
        <?php   } ?>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>