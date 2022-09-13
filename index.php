<DOCTYPE html>
    <html>
        <head>
            <title>Página Inicial</title>
            <link rel="icon" type="image/x-icon" href="img/youtubeazul.png">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.98.0">
            <title>Carousel Template · Bootstrap v5.2</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }

                .b-example-divider {
                    height: 3rem;
                    background-color: rgba(0, 0, 0, .1);
                    border: solid rgba(0, 0, 0, .15);
                    border-width: 1px 0;
                    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
                }

                .b-example-vr {
                    flex-shrink: 0;
                    width: 1.5rem;
                    height: 100vh;
                }

                .bi {
                    vertical-align: -.125em;
                    fill: currentColor;
                }

                .nav-scroller {
                    position: relative;
                    z-index: 2;
                    height: 2.75rem;
                    overflow-y: hidden;
                }

                .nav-scroller .nav {
                    display: flex;
                    flex-wrap: nowrap;
                    padding-bottom: 1rem;
                    margin-top: -1px;
                    overflow-x: auto;
                    text-align: center;
                    white-space: nowrap;
                    -webkit-overflow-scrolling: touch;
                }
                #slide1{
                    background-image: url('img/computador-pc-gamer.jpeg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide2{
                    background-image: url('img/processadores.png');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide3{
                    background-image: url('img/gabinete.png');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide4{
                    background-image: url('img/WindowsLogo.png');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide5{
                    background-image: url('img/solar.jpg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide6{
                    background-image: url('img/gabineteaberto.webp');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide7{
                    background-image: url('img/MicrosoftWindows.png');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide8{
                    background-image: url('img/aquecimento.png');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide9{
                    background-image: url('img/gabinetelimpou.jpg');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                #slide10{
                    background-image: url('img/youtubeazul.png');
                }

            </style>


            <!-- Custom styles for this template -->
            <link href="carousel.css" rel="stylesheet">
            <script src="js/bootstrap.min.js"></script>

        </head>
        <body>    

            <header>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div class="container-fluid">
                        <img src="img/youtubeazul.png" style="width:40px"><a class="navbar-brand" href="index.php"><b>INFOFLIX</b></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="entrar.php"><b>Entrar</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="cadastro.php"><b>Cadastre-se</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="sobre.php"><b>Sobre</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="bibliografia.php"><b>Bibliografia</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" id="slide1">


                            <div class="container">
                                <div class="carousel-caption text-align: center" style="background-color: black; padding: 1em">
                                    <h1><b>Como Instalar o Sistema Operacional de um Computador</b></h1>
                                    <p><a class="btn btn-lg btn-primary" href="https://youtu.be/YFl2mqMQG8o"><i>Lock Gamer Hardware</i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active" id="slide2">

                            <div class="container">
                                <div class="carousel-caption text-align: center" style="background-color: black; padding: 1em">
                                    <h1><b>Como Evitar o Superaquecimento do Processador</b></h1>
                                    <p><a class="btn btn-lg btn-primary" href="https://youtu.be/cmGnxu_2yFw"><i>TecMundo</i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active" id="slide3">

                            <div class="container">
                                <div class="carousel-caption text-align: center" style="background-color: black; padding: 1em">
                                    <h1><b>Como Limpar Corretamente seu Gabinete</b></h1>
                                    <p><a class="btn btn-lg btn-primary" href="https://youtu.be/Vw4Hhhq3hMw"><i>TecMundo</i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <!-- Marketing messaging and featurettes
                ================================================== -->
                <!-- Wrap the rest of the page in another container to center all the content. -->

                <div class="container marketing">

                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" id="slide4"></svg>

                            <h2 class="fw-normal"><i>Instalar Sistema Operacional no PC</i></h2>
                            <p><a class="btn btn-secondary" href="sistemaoperacional.php"><b>Saiba Mais</b> &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" id="slide5"></svg>

                            <h2 class="fw-normal"><i>Evitar Superaquecimento do Processador</i></h2>
                            <p><a class="btn btn-secondary" href="superaquecimento.php"><b>Saiba Mais</b> &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" id="slide6"></svg>

                            <h2 class="fw-normal"><i>Limpar o Gabinete corretamente</i></h2>
                            <p><a class="btn btn-secondary" href="limpargabinete.php"><b>Saiba Mais</b> &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->


                    <!-- START THE FEATURETTES -->

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading fw-normal lh-1"><b><i>Aprenda a instalar um Sistema Operacional no seu dispositivo.</i></b></h2>
                        </div>
                        <div class="col-md-5">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" id="slide7"</svg>

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading fw-normal lh-1"><i><b>Aprenda a controlar a temperatura do processador e evitar um superaquecimento.</b></i></h2>
                        </div>
                        <div class="col-md-5 order-md-1">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" id="slide8"</svg>

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading fw-normal lh-1"><b><i>Aprenda a limpar corretamente o seu Gabinete.</i></b></h2>              
                        </div>
                        <div class="col-md-5">
                            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" id="slide9"</svg>

                        </div>
                    </div>

                    <hr class="featurette-divider">

                    <!-- /END THE FEATURETTES -->

                </div><!-- /.container -->


                <!-- FOOTER -->
                <footer class="container">              
                    <p>&copy; <b>2022 Infoflix LTDA</b> &middot;</p>
                    <p class="float-end"><b>Trabalho de PHP INF 261 - Hannah Raiol e Rafael Loureiro</b></p>
                </footer>
            </main>


            <script src="js/bootstrap.bundle.min.js"></script>


        </body>
    </html>   
</DOCTYPE>
