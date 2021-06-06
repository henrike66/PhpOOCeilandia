<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "novo_php";


$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error){
    
    die("connection failed: ".$conn->connect_error);
    
}


$sql = "DELETE FROM meus_alunos WHERE cod = 15";

if ($conn->query($sql) === TRUE){
    
    echo "Dados delatado com sucesso";
    
} else {

    echo "Erro ao deletar o codigo: ".$conn->error;
    
}


$conn->close();