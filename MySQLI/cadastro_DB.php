<?php

require 'ClasseConexao.php';


$name = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_SPECIAL_CHARS);
$fone = filter_input(INPUT_POST,'fone',FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);

$conn = new ClasseConexao();

$sql = "INSERT INTO meus_alunos (nome, idade, fone, cidade)
VALUES ('$name', '$idade', '$fone', '$cidade')";

$result = $conn->conectaDB()->query($sql);

if ($result === TRUE){
    
    echo "Novo Registro foi cadastrado";
   
} else {
    
    echo "Erro ao cadastrar";
    
}

$conn->conectaDB()->close();
