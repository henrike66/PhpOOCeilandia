<?php
include './Cabeçario_exercicio.php';
include './Classe_exercicio/ClassCrud.php';
?>


<div class="container">

    <h1>Seleção dos Dados do Aluno</h1>
    <table class="table">

        <thead>

        <th>Nome</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Cidade</th>

        </thead>

        <tbody>

              <?php
    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "meus_alunos", "", "", array());
    
    while ($Result = $BFetch->fetch_all()){

        foreach ($Result as $Fetch){
        
        ?>
            <tr>
                
                <td><?php echo $Fetch[1]; ?></td>
                <td><?php echo $Fetch[2]; ?></td>
                <td><?php echo $Fetch[3]; ?></td>
                <td><?php echo $Fetch[4]; ?></td>
                
                <td>
                    
                    <a href="<?php echo "visualizar_exercicio.php?id={$Fetch[0]}"; ?>">
                                  <img src="img/Visualizar.jpeg" alt="visualizar">
                    </a>
                    <a href="<?php echo "Cadastrar_exercicio.php?id={$Fetch[0]}"; ?>">
                                  <img src="img/Editar.jpeg" alt="editar">
                    </a>
                    <a class="Deletar" href="<?php echo "Controller/ControlleDeletar.php?id={$Fetch[0]}"; ?>">
                                  <img src="img/Excluir.jpeg" alt="deletar">
                    </a>
                    
                </td>
                
                
            </tr> 
            
          <?php  
    }
    }

              ?>

        </tbody>

    </table>

</div>



<?php
include './rodape_exercicio.php';
?>