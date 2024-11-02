<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="n1">Número 1: </label>
        <input type="text" name="n1" value="<?php echo (isset($_GET["n1"])?$_GET["n1"]:"");?>"><br>
        <label for="n2">Número 2: </label>
        <input type="text" name="n2" value="<?php echo (isset($_GET["n2"])?$_GET["n2"]:"");?>"><br>
        <input type="submit" value="Somar"><br>
        Resultado: <input type="text" width="5" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>"><br>
    </form>
</body>
</html>

<!-- 
<form action="calcular.php" method="post">
        <label for="n1">Número 1: </label>
        <input type="text" name="n1" ><br>
        <label for="n2">Número 2: </label>
        <input type="text" name="n2"><br>
        <input type="submit" value="Somar"><br>
        Resultado: <input type="text" width="5"><br>
    </form>
    
 -->


 <!-- 
 <form action="calcular.php" method="post">
        <label for="n1">Número 1: </label>
        <input type="text" name="n1" value="<?php echo (isset($_GET["n1"])?$_GET["n1"]:"");?>"><br>
        <label for="n2">Número 2: </label>
        <input type="text" name="n2" value="<?php echo (isset($_GET["n2"])?$_GET["n2"]:"");?>"><br>
        <input type="submit" value="Somar"><br>
        Resultado: <input type="text" width="5" value="<?php echo (isset($_GET["res"])?$_GET["res"]:"");?>"><br>
    </form>
 -->