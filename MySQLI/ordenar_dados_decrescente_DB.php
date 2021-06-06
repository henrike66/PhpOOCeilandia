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

$sql = "SELECT * FROM meus_alunos ORDER BY nome DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    
    echo "<table border=1>"
    ."<th>Nome<th>Idade<th>Telefone<th>Cidade";
    while ($row = $result->fetch_assoc()){
        
        echo "<tr>"
        ."<td>".$row["nome"]."</td>"
        ."<td>".$row["idade"]."</td>"
        ."<td>".$row["fone"]."</td>"
        ."<td>".$row["cidade"]."</td>"
        ."</tr>";
    }
    echo "</th></th></th></th>"
    ."</table>";
} else {

    echo "Nenhum resultado foi consultado";
    
}

$conn->close();
