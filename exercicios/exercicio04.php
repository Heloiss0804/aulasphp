
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercicio - 04</title>
<style>
    
       table {
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
</style>
</head>
<body>
<table class="tabela-linguagens">
<thead>
<tr>
<th>ID</th>
<th>Linguagem</th>
<th>Descrição</th>
</tr>
</thead>
<tbody>
  <h1>Tabela de linguagens e descricao</h1>
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
              <td><?=$linguagem["id"]?></td>
              <td><?=$linguagem["nome"]?></td>
              <td><?=$linguagem["descricao"]?></td>
              </tr>
              
           
                <?php
                 
           }
           ?>
</tbody>
</table>
</body>
</html>





  
        










