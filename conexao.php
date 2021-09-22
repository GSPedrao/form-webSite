<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "formdatab";
 
    
//Criando a conexão 


$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);   

if (!$conn) {
    die("Conexão Falhou: " . mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>