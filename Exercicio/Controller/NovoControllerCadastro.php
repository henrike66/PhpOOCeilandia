<?php


include '../Variavel/Variavel.php';
include '../Classe_exercicio/ClassCrud.php';


    $Crud = new ClassCrud();

    if ($Acao == 'Cadastrar'){
    
    $Crud->insertDB(
            "meus_alunos", "?,?,?,?,?", "isiss", array($cod,$nome,$idade,$fone,$cidade));
    
            echo "Cadastro realizado com sucesso";
    
        
    }else {
        
        $Crud->updateDB(
                "meus_alunos", "nome=?,idade=?,fone=?, cidade=?","cod=?", "sissi", array($nome,$idade,$fone,$cidade,$cod));
            echo "Cadastro editado com sucesso";
    }
    

