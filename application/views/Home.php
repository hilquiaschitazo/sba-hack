<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/images/logotipo.png" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SBA - HACKMAT</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?= base_url() ?>/assets/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url() ?>/assets/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head_top">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="<?= base_url() ?>"><img style="height: 100px; width: 100px;" src="<?= base_url() ?>/assets/images/logotipo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>"> Home </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sobresbahack">Crédito - SBA HACK</a>
                                        </li>
                                        <?php if ($this->session->userdata('id') != NULL) { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= base_url() ?>painel"><b>Painel</b></a>
                                            </li>
                                        <?php } else { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= base_url() ?>login"><b>Entrar</b></a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="text-bg">
                                <h1>Plataforma de Solicitação de Crédito</h1>
                                <p>Os seus sonhos poderão ser alcançados. Não deixe de adquirir o que pretende. Temos para si uma oferta variada de produtos por via de financiamento que poderão ir de encontro às suas necessidades</p>
                               <!--  <a href="<?= base_url() ?>painel/solicitarcredito">Solicitar Crédito</a> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-img">
                                <figure><img src="<?= base_url() ?>/assets/images/box_img.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- end banner -->
    <!-- business -->
    <div class="business">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="sobresbahack">
                    <div class="titlepage">
                        <span>Nossos Produtos</span>
                        <h2>Crédito</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="business_box ">
                                <figure><img src="<?= base_url() ?>/assets/images/business_img.jpg" alt="#" /></figure>
                                <p>Desfrute de bens e serviços pessoais como a compra de diversos artigos, benfeitorias, viagens, pagamentos de dívidas, móveis, etc, é o que temos para lhe oferecer como cliente. Gostaria de solicitar um empréstimo?</p>
                                <a class="read_more" href="<?= base_url() ?>painel/solicitarcredito">Solicitar Crédito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end business -->

    <!-- end projects -->
    <!-- Testimonial -->
    <div class="section">
        <div class="container">
            <div id="" class="Testimonial">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Testemunhos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="Testimonial_box">
                            <i><img src="<?= base_url() ?>/assets/images/people.png" alt="#" /></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="Testimonial_box">
                            <h4>Clâudia Neto</h4>
                            <p>Tive um optimo crédito!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Testimonial -->
    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contacte-nos</h2>
                        <!--      <span>There are many variations of passages of Lorem Ipsum available, but the </span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <form class="main_form ">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="form_contril" placeholder="Nome " type="text" name="Nome ">
                            </div>
                            <div class="col-md-12">
                                <input class="form_contril" placeholder="Telefone" type="text" name=" Telefone">
                            </div>
                            <div class="col-md-12">
                                <input class="form_contril" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Mensagem" type="text" name="Mensagem"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send_btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="cont">
                            <!--    <h3> <strong class="multi"> Free Multipurpose Responsive</strong><br>
                                Landing Page 2019
                            </h3> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>SBA - HACKMAT<a href="#"> Equipa Rosa</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url() ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>