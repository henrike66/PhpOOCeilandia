<?php

require 'ClasseConexao.php';


$conn = new ClasseConexao();


$sql = "CREATE TABLE Meus_Alunos ("
        . "cod int primary key auto_increment,"
        . "nome varchar (120),"
        . "idade int,"
        . "fone varchar (20),"
        . "cidade varchar (120))";

if ($conn->conectaDB()->query($sql) === TRUE){
    
    echo "TABLE created successfully";
    
} else {

    echo "Error creating TABLE".$conn->conectaDB()->error;
    
}

$conn->conectaDB()->close();
