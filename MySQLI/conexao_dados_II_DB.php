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


$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$idade = $_POST['idade'];
$fone = $_POST['fone'];


$sql = "INSERT INTO Meus_Alunos (nome, idade, fone, cidade) values ('$nome', '$idade', '$fone', '$cidade')";

if ($conn->query($sql) === TRUE){
    
    echo "Um novo registro criado";
    
} else {

    echo "Error: ".$sql."<br>".$conn->error;
    
}

$conn->close();