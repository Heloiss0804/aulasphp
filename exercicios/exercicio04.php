
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
   "HTML" => "Estruturação",
   "CSS" => "Estilos",
   "JS" => "Comportamentos",
   "PHP" => "Back-End",
   "SQL" => "Manipulação de dados",
   "Java" => "Softwares"
];
?>
<?php
          
           $id = 1;
          
           foreach ($linguagens as $linguagem => $descricao) {
            ?>
               <tr>
              <td><?=$id?></td>
              <td><?=$linguagem?></td>
              <td><?=$descricao?></td>
              </tr>
              
           
                <?php
                  $id++;
           }
           ?>
</tbody>
</table>
</body>
</html>





  
        










