<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

//checando a conexão

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "connected successfully <br>";

//$sql = "CREATE DATABASE db_cursophp";
//
//if ($conn->query($sql) === true) {
//    
//    echo "Database created successfully";
//    
//} else {
//    
//    echo "Error creating database: ".$conn->error;
//    
//}

//$nome = $_POST["nome"];
//$idade = $_POST["idade"];
//$fone = $_POST["fone"];
//$cidade = $_POST["cidade"];

$sql = "INSERT INTO alunos (nome, idade, fone, cidade) values ('$nome', '$idade', '$fone', '$cidade')";

if ($conn->multi_query($sql) === TRUE) {

    echo "Um novo registro foi criado com sucesso";
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
