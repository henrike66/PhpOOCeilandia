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

$stmt = $conn->prepare("INSERT INTO Meus_Alunos (nome, idade, fone, cidade) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $nome, $idade, $fone, $cidade);

$nome = "Florentino Junio Araujo Leonidas";
$idade = "30";
$fone = "(61)98887-5524";
$cidade = "Asa Sul";
$stmt->execute();
    
$nome = "Robson de Sousa Freire";
$idade = "34";
$fone = "(61)98887-6258";
$cidade = "Ocidental";
$stmt->execute();
    
$nome = "Franklin Lima do Nascimento";
$idade = "36";
$fone = "(61)92950-5524";
$cidade = "Setor O";
$stmt->execute();
    

echo "New records created successfully";

$stmt->close();
$conn->close();