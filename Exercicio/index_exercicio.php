<?php

session_start();

if(!isset($_SESSION['usuarioNome'])){
    
    header("Location: entrar_exercicio.php");
}

include './Cabeçario_exercicio.php';

?>


<div class="slider_area">
            <div class="slider_active owl-carousel">

<div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="slider_text ">
                                    <h3>Não perca sua chance... <br>
                                        Faça sua inscrição.</h3>
                                    <a href="Cadastrar_exercicio.php" class="boxed-btn3">Vamos lá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div class="single_slider  d-flex align-items-center slider_bg_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="slider_text ">
                                    <h3>Não perca sua chace... <br>
                                        Faça sua inscrição.</h3>
                                    <a href="Cadastrar_exercicio.php" class="boxed-btn3">Vamos lá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Fim do Carrossel - 2 -->

            </div>
        </div>

<?php

include './rodape_exercicio.php';

?>