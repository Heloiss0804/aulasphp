<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <style> -->

    <!-- table { 
           width: 60%;
           margin: 50px auto;
           border-collapse: collapse;
           font-family: Arial, sans-serif;
       }
   
       th {
           background-color:rgb(175, 76, 76);
           color: white;
           padding: 10px;
           text-align: left;
       }
      
       td {
           padding: 10px;
           text-align: left;
           border-bottom: 1px solid #ddd;
       }
      
       tr:nth-child(even) {
           background-color: #f2f2f2;
       }
      
       tr:hover {
           background-color: #ddd;
       }

       h1{
        text-align: center;
        justify-content: center;
       
       }
</style>-->
</head>

<body >
    <table class="table table-dark table-hover">
        <thead class="">
            <tr class="">
                <th class="">ID</th>
                <th class="">Linguagem</th>
                <th class="">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <h1 class=>Tabela de linguagens e descricao</h1>
            <?php

            $linguagens = [
                [
                    "id" => 1,
                    "nome" => "HTML",
                    "descricao" => "Estruturação"
                ],
                [
                    "id" => 2,
                    "nome" => "CSS",
                    "descricao" => "Estilos"
                ],
                [
                    "id" => 3,
                    "nome" => "JS",
                    "descricao" => "Comportamentos"
                ],
                [
                    "id" => 4,
                    "nome" => "PHP",
                    "descricao" => "Back-End"
                ],
                [
                    "id" => 5,
                    "nome" => "SQL",
                    "descricao" => "Manipulação de dados"
                ],
                [
                    "id" => 6,
                    "nome" => "Java",
                    "descricao" => "Softwares"
                ],
            ];
            ?>
            <?php



            foreach ($linguagens as  $linguagem) {
            ?>
                <tr>
                    <td><?= $linguagem["id"] ?></td>
                    <td><?= $linguagem["nome"] ?></td>
                    <td><?= $linguagem["descricao"] ?></td>
                </tr>


            <?php

            }
            ?>


        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>