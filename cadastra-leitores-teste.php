<head>
    <title>Cadastro Incluído</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
include "config.php";
if (!$conn){
    die("Falha na conexão: {mysqli_connect_error()}");
}

//recebe os dados do formulário
$nome = 'Eduardo';
$dtnasc = '2024-10-07';
$celular = '(81)';
$email = 'edu@edu';
$ra = '64';
$endereco = 'Rua de Casa';
$num_end = '01';
$bairro = 'Paratibe';
$cidade = 'Paulista/PE';

//cria variável para inserir o registro
$sql = "INSERT INTO `leitores`
(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) 
VALUES ('$nome', '$dtnasc', '$celular', '$email', '$ra', '$endereco', '$num_end', '$bairro', '$cidade')";

$query = mysqli_query($conn,$sql) or die(mysqli_error($db));

//Verifico se o registro foi inserido com sucesso
if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso!!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
} else {
    echo "<center>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
?>