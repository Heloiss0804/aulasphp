<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .bloco {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            width: 40%;
            background-color: rgba(28, 151, 38, 0.39);
        }

        .bloco h2 {
            margin-bottom: 15px;
            color: #333;

        }

        .bloco p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        .bloco3 {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php

    $pessoa1 = [
        "nome_usuario" => "flavio_G_Bussi",
        "email" => "flavio08@email.com",
        "senha" => "654321",
        "idade" => 38,
        "sexo" => "Masculino",
        "cidade" => "São Paulo"
    ];
    $pessoa2 = [
        "nome_usuario" => "vanessa_baldin",
        "email" => "vanessa@email.com",
        "senha" => "123654",
        "idade" => 25,
        "sexo" => "Feminino",
        "cidade" => "Rio GRande do Sul"
    ];
    ?>
    <h1 class="bloco3">Informações dos Usuários</h1>
    <div class="container">
        <!--Primeira Pessoa -->
        <section class="bloco">
            <h2>Usuário: <?php echo $pessoa1['nome_usuario']; ?></h2>
            <p>Email: <?= $pessoa1['email']; ?></p>
            <p>Idade: <?= $pessoa1['idade']; ?> anos</p>
            <p>Sexo: <?= $pessoa1['sexo']; ?></p>
        </section>

        <!-- segunda pessoa -->
        <section class="bloco">
            <h2>Usuário: <?php echo $pessoa2['nome_usuario']; ?></h2>
            <p>Email: <?= $pessoa2['email']; ?></p>
            <p>Idade: <?= $pessoa2['idade']; ?> anos</p>
            <p>Sexo: <?= $pessoa2['sexo']; ?></p>
        </section>
    </div>
</body>

</html>