<?php

include "../Classe_exercicio/ClassCrud.php";

$Crud = new ClassCrud();

$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$dell = $Crud->deleteDB("meus_alunos", "cod=?", "i", array ($IdUser));


        echo "Dado deletado com sucesso!";
        
        if($dell){
            
            header("Location: ../selecao_exercicio.php");
            
        } else {
            

            echo "Erro ao deletar o usuário";
            
        }