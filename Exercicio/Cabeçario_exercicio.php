<!DOCTYPE html>



<html lang="pt-br">
    <head>



        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">


        <!-- <link rel="stylesheet" href="css/responsive.css"> -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


        <link href="css/css/exercicio_javas.css" rel="stylesheet" type="text/css"/>






    </head>
    <body>

        <header>
            <div class="header-area ">
                <div class="header-top_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-6 col-lg-12">
                                <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                    <div class="text_wrap">
                                        <p><span>+55 61 3012-0048</span> <span></span></p>
                                    </div>


                                    <div class="text_wrap">
                                        <p><!--<a href="Login_exercicio.php"> <i class="ti-user"></i>  Login</a> I--> <a href="Cadastrar_exercicio.php" style="color: greenyellow">Cadastrar</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Barra de acessos-->

                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="header_wrap d-flex justify-content-between align-items-center">
                                    <div class="header_left">
                                        <div class="logo">
                                            <a href="index_exercicio.php">
                                                <img src="img/logo da igreja menor.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="header_right d-flex align-items-center">
                                        <div class="main-menu  d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">
                                                    <li><a  href="index_exercicio.php">Home</a></li>
                                                    <li><a href="selecao_exercicio.php">Alunos</a></li>

                                                    <li><a href="#">Departamentos<i class="ti-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="Event.html">Joias de Cristo</a></li>
                                                            <li><a href="event_details.html">Davi</a></li>
                                                            <li><a href="Inscrição.html">Juniores</a></li>
                                                            <li><a href="elements.html">Aprendendo com Cristo</a></li>
                                                            <li><a href="elements.html">Sara</a></li>
                                                            <li><a href="elements.html">Abraão</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li><a href="sair_exercicio.php">Sair</a></li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <!--                                        <div class="Appointment">
                                                                                    <div class="book_btn d-none d-lg-block">
                                                                                        <a data-scroll-nav='1' href="Cadastrar_exercicio.php">Inscrição</a>
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="jumbotron text-center" style="margin-bottom: 0">
                    <p>Seja bem vindo: <?php echo $_SESSION['usuarioNome']; ?></p>
                </div>

        </header>



        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>

        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>

    </body>
</html>
