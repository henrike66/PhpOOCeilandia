<?php

require 'ClasseConexao.php';

$conn = new ClasseConexao();

$sql = "CREATE DATABASE db_teste_mysqli";

if ($conn->conectaDB()->query($sql) === TRUE){
    
    echo "Database criado com sucesso";
} else {
 
    echo "Erro ao criar o banco: ".$conn->conectaDB()->error;
}

$conn->conectaDB()->close();

