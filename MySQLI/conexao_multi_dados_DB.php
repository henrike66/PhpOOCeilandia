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

$sql = "INSERT INTO Meus_Alunos (nome, idade, fone, cidade) values ('Maria dos Anjos de Sousa', '60', '(61)9876-5432', 'Recanto das Emas');";
$sql .= "INSERT INTO Meus_Alunos (nome, idade, fone, cidade) values ('João Carlos Almeida Leonidas', '1', '(61)93216-5478', 'Santa Maria');";
$sql .= "INSERT INTO Meus_Alunos (nome, idade, fone, cidade) values ('Alice Almeida Rodrigues', '6', '(61)9852-3691', 'Santa Maria');";
$sql .= "INSERT INTO Meus_Alunos (nome, idade, fone, cidade) values ('Maria do Carmo da Silva', '70', '(61)9874-7419', 'Taguatinga Norte');";

if ($conn->multi_query($sql) === TRUE){
    
    echo "<br>";
    $last_id = $conn->insert_id;
  echo "Um novo Registro foi cadastrado no id: " . $last_id;
    echo "Um novo registro criado";
    
} else {

    echo "Error: ".$sql."<br>".$conn->error;
    
}

$conn->close();