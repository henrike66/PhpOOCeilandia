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

$sql = "CREATE DATABASE novo_php";

if ($conn->query($sql) === TRUE){
    
    echo "Database created successfully";
    
} else {

    echo "Error creating database".$conn->error;
    
}

$conn->close();