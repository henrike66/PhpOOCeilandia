<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de cadastro</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>

        <div class="container">
            
            <h1 class="text-center">Fomulario de Cadastro</h1>
            
            
            <!--<form class="form-horizontal" action="conexao_dados_II_DB.php" method="post">-->
            <form class="form-horizontal" action="cadastro_DB.php" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-1" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Escreva seu nome">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="idade">Idade:</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="idade" name="idade" placeholder="sua idade">
                    </div>
                    
                    <label class="control-label col-sm-1" for="fone">Telefone:</label>
                    <div class="col-sm-3">
                        <input type="tel" class="form-control" id="fone" name="fone" placeholder="Qual é o seu telefone">
                    </div>
                    
                    <label class="control-label col-sm-1" for="cidade">Cidade:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Qual é a sua cidade">
                    </div>
                </div>
         
                <div class="form-group">
                    <div class="control-label col-sm-1">
                        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </div>
    </form>
            
            </div>
</body>
</html>
