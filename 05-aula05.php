<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Tabelas dinâmicas</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
        img{
            width: 100px;
            padding: 10px;
        }
        h1{
            font-family: arial;
        }
    </style>
</head>
<body>
    <?php 
        echo "<h1>Tabela dinâmica de imagens</h1>";
        echo "<table><tr>"; // Abertura da tabela
        for ($i=1; $i<=5; $i++ ){ // Looping de impressão das imagens
            echo "<td><img src='./img/$i.jpeg'></td>"; // Concatenação
        }
        echo "</tr>";
        
        echo "<tr>";
        for ($i=6; $i<=10; $i++ ){
            echo "<td><img src='./img/$i.jpeg'></td>";
        }
        echo "</tr></table>";

        

    ?>
</body>
</html>