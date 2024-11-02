<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Tela de Confirmmf</h1>

    <?php 
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $resultado = $n1 + $n2;
    echo "A soma é: ",$resultado;
    header("Location: aula09.php?res=$resultado&n1=$n1&n2=$n2");
    ?>
</body>
</html>


<!-- 
    //
    // header("Location: aula9.php?res=$resultado&n1=$n1&n2=$n2");
-->