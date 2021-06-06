<?php

$servidor = "locolhost";
$usuario = "root";
$senha = "";
$banco = "cursophp";

try {
    
    $conn = new PDO ("mysql:host-$servidor;dpname-$banco", $usuario, $senha);
    
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully";
    
//    $sql = "CREATE DATABASE db_novoPDO";
//    $conn->exec($sql);
//    echo "Database created successfully<br>";
    
    $sql = "CREATE TABLE alunos (cod int primary key auto increment, nome varchar(120), idade int, fone varchar(20), cidade varchar(120))";
    $conn ->query($sql);
    
    echo "A Tabela foi created sucessfully<br>";
    
} catch (PDOException $exc) {
    
    echo "Connection failed: ".$exc->getMessage()."<br>";
    echo $sql. "<br>".$exc->getMessage();
    
}

$conn = NULL;