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
                             <!--    <a href="<?= base_url() ?>painel/solicitarcredito">Solicitar Crédito</a> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="contact" class="contact">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="titlepage">
                                                <h2>Login</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <form class="main_form" action="<?= base_url() ?>login/registaruser" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <input class="form_contril" placeholder="Code Customer" type="text" name="cliente_id">
                                                    </div>
                                                    <div class="col-md-12 ">
                                                        <input class="form_contril" placeholder="Email" type="email" name="email">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="form_contril" placeholder="Password" type="password" name="password">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="form_contril" placeholder="Repeat Password" type="password" name="password">
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- end banner -->


    <!-- contact -->

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
<!-- 



                                <div class="card card-login mx-auto mt-5">
                                    <div class="card-header"><h1>Login</h1></div>
                                    <p class="login-box-msg"><?= ($this->session->userdata('mensagem') != null) ? "<b class='text-danger'>" . $this->session->userdata('mensagem') . "</b>" : "<b>Insira Suas Credênciais!</b>"; ?></p>
                                    <div class="card-body">
                                        <form action="<?= base_url() ?>login/autenticar" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                                                    <label for="inputEmail">Email</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <input type="password" name="senha" class="form-control" placeholder="Senha" required="required">
                                                    <label for="inputPassword">Senha</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="remember-me">
                                                        Relembrar Senha
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="submit" name="entrar" class="btn1" value="Entrar">
                                            <input type="submit" class="btn1" value="Registrar">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 -->