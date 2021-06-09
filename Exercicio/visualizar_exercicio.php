<?php

include './Cabeçario_exercicio.php';
include 'Classe_exercicio/ClassCrud.php';

$Crud = new ClassCrud();

?>


<div class="container">
    
    <?php
    
    $IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $BFetch = $Crud->selectDB("*", "meus_alunos", "where cod=?", "i", array($IdUser));
    $Result = $BFetch->fetch_all();
    foreach ($Result as $Fetch){
        
        ?>
    
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>Nome:</strong> <?php echo $Fetch[1]; ?>
    <strong>Idade:</strong> <?php echo $Fetch[2]; ?>
    <strong>Telefone:</strong> <?php echo $Fetch[3]; ?>
    <strong>Cidade:</strong> <?php echo $Fetch[4]; ?>
    
    <?php
    
    }

    
    ?>
    
</div>

    


<?php

include './rodape_exercicio.php';

?>