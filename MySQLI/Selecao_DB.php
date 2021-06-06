<?php

require 'ClasseConexao.php';


$conn = new ClasseConexao();

$sql = "SELECT * FROM meus_alunos ORDER BY nome";

$result = $conn->conectaDB()->query($sql);

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

$conn->conectaDB()->close();
