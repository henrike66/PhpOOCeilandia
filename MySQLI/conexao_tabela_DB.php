<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "novo_php";


$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error){
    
    die("connection failed: ".$conn->connect_error);
    
}

echo "connected successfully <br>";

$sql = "CREATE TABLE Meus_Alunos ("
        . "cod int primary key auto_increment,"
        . "nome varchar (120),"
        . "idade int,"
        . "fone varchar (20),"
        . "cidade varchar (120))";

if ($conn->query($sql) === TRUE){
    
    echo "TABLE created successfully";
    
} else {

    echo "Error creating TABLE".$conn->error;
    
}

$conn->close();