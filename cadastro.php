<?php
include('conexao.php');


$nome       = $_POST["nome"];
$sobren     = $_POST["sobren"];
$email      = $_POST["email"];
$senha      = $_POST["senha"];
$cpf        = $_POST["cpf"];
$ddn        = $_POST["ddn"];
$numero     = $_POST["numero"];
$cep        = $_POST["cep"];
$rua        = $_POST["rua"];
$bairro     = $_POST["bairro"];
$cidade     = $_POST["cidade"];
$estado     = $_POST["estado"];
$comp       = $_POST["comp"];


$cad_usuario = "INSERT INTO usuarios (nome, sobrenome, email, senha, CPF, nascimento, numero, CEP, rua, bairro, cidade, esstado, complemento) 
VALUES ('$nome', '$sobren' , '$email', '$senha','$cpf', '$ddn', '$numero', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$comp')";


if (mysqli_query($conn, $cad_usuario)) {
    echo "<h1>Novo cadastro realizado </h1></br>";
} else {    
    echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>