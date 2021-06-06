<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "novo_php";


$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error){
    
    die("connection failed: ".$conn->connect_error);
    
}


$sql = "UPDATE meus_alunos SET fone = '(61)98745-5455' WHERE cod = 10";

if ($conn->query($sql) === TRUE){
    
    echo "Dados atualizados com sucesso";
    
} else {

    echo "Erro ao atualizar o dado: ".$conn->error;
    
}


$conn->close();