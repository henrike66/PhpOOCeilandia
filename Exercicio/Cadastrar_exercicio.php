<?php
session_start();

if (!isset($_SESSION['usuarioNome'])) {

    header("Location: entrar_exercicio.php");
}


include './Cabeçario_exercicio.php';
include './Classe_exercicio/ClassCrud.php';

if (isset($_GET['id'])) {

    $Acao = "Editar";

    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "meus_alunos", "where cod=?", "i", array($_GET['id']));
//    Buscar em todas as linhas para retornar resultados
    $Fetch = $BFetch->fetch_all();
    foreach ($Fetch as $Fetchs) {
//        
        $cod = $Fetchs[0];
        $nome = $Fetchs[1];
        $idade = $Fetchs[2];
        $fone = $Fetchs[3];
        $cidade = $Fetchs[4];
    }
}

//Cadastrar novo
else {

    $Acao = "Cadastrar";
    $cod = 0;
    $nome = "";
    $idade = "";
    $fone = "";
    $cidade = "";
}
?>



<div data-scroll-index='1' class="admission_area">
    <div class="admission_inner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="admission_form">
                        <h3>Inscrição:</h3>
                        <div class="Resultado"></div>
                        <form action="Controller/NovoControllerCadastro.php" method="post" enctype = "multipart/form-data">
                            <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
                            <input type="hidden" id="cod" name="cod" value="<?php echo $cod; ?>">
                            <div class="row">
                                <div class="col-md-12" >
                                    <div class="single_input">
                                        <input type="text" name="nome" placeholder="Nome" style="text-transform: uppercase" value="<?php echo $nome ?>" >
                                    </div>
                                </div>
                                <!--                                        <div class="col-md-6 col-12">
                                                                            <div class="single_input">
                                                                                <input type="text" placeholder="Sobrenome" style="text-transform: uppercase">
                                                                            </div>
                                                                        </div>-->

                                <!--                                        <div class="col-md-6 col-12">
                                                                            <div class="form-check-inline">
                                                                                <label class="form-check-label text-white">
                                                                                    <input type="radio" class="form-check-input" name="optradio">
                                                                                    Masculino
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check-inline">
                                                                                <label class="form-check-label text-white">
                                                                                    <input type="radio" class="form-check-input" name="optradio">
                                                                                    Feminino
                                                                                </label>
                                                                            </div>
                                                                        </div>-->

                                <label for="birthday" class="text-white">Idade:</label>
                                <div class="col-md-3 col-12">
                                    <input type="text" class="form-control" id="idade" name="idade" value="<?php echo $idade ?>">
                                </div>

                                <div class="col-md-3 col-12">
                                    <div class="single_input">
                                        <input type="text" placeholder="Telefone" name="fone" value="<?php echo $fone ?>" >
                                    </div>
                                </div>

                                <div class="col-md-5 col-12 ">
                                    <div class="single_input">
                                        <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $cidade ?>" >
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="single_input">
                                        <input type="file" name="fileToUpload">
                                    </div>
                                </div>

                                <div class="col-md-12">

                                </div>
                                <div class="col-md-12">
                                    <div class="apply_btn">
                                        <button class="boxed-btn3" name="submit" type="submit"><?php echo $Acao ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './rodape_exercicio.php';
?>