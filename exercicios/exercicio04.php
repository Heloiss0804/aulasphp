
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabela de Linguagens</title>
<style>
   body {
     font-family: Arial, sans-serif;
     margin: 0;
     padding: 0;
     display: flex;
     justify-content: center;
     align-items: center;
     height: 100vh;
     background-color: #f4f4f4;
   }
   table {
     width: 80%;
     border-collapse: collapse;
     margin-top: 20px;
     border-radius: 8px;
     overflow: hidden;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }
   th, td {
     padding: 12px 20px;
     text-align: left;
     border-bottom: 1px solid #ddd;
   }
   th {
     background-color: #4CAF50;
     color: white;
   }
   tr:nth-child(even) {
     background-color: #f9f9f9;
   }
   tr:hover {
     background-color: #ddd;
   }
   .table-container {
     width: 100%;
     overflow-x: auto;
     background-color: white;
     padding: 20px;
     border-radius: 8px;
   }
</style>
</head>
<body>
<div class="table-container">
<table id="linguagens">
<thead>
<tr>
<th>ID</th>
<th>Linguagem</th>
<th>Descrição</th>
</tr>
</thead>
<tbody>
<?php
$linguagens = [
   ["nome" => "HTML", "descricao" => "Estruturação"],
   ["nome" => "CSS", "descricao" => "Estilos"],
   ["nome" => "JS", "descricao" => "Comportamentos"],
   ["nome" => "PHP", "descricao" => "Back-End"],
   ["nome" => "SQL", "descricao" => "Manipulação de dados"],
   ["nome" => "Java", "descricao" => "Softwares"]
];
?>
<?php
       foreach ($linguagens as $index => $linguagem) {
           echo "<tr>";
           echo "<td>" . ($index + 1) . "</td>";
           echo "<td>" . $linguagem['nome'] . "</td>";
           echo "<td>" . $linguagem['descricao'] . "</td>";
           echo "</tr>";
       }
       ?>
</tbody>
</table>
</div>
</body>
</html>



  
        










