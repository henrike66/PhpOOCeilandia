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


$nome = "Leilane de Oliveria Almeida Leonidas";
$cidade = "Santa Maria";
$idade = 31;
$fone = "(61)99156-9170";


$sql = "INSERT INTO Meus_Alunos (nome, idade, fone, cidade) values ('$nome', '$idade', '$fone', '$cidade')";

if ($conn->query($sql) === TRUE){
    
    echo "Um novo registro criado";
    
} else {

    echo "Error: ".$sql."<br>".$conn->error;
    
}

$conn->close();