<?php
include './admin/conections/conexao.php';
?>

<html>
    <head>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Deputado Arthur Bisneto</title>

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/psdb-ico.png">

        <!-- Stylesheets -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/fontello.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css">
        <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
        <link href="css/chosen.css" rel="stylesheet" type="text/css">
        <link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css">
        <link href="css/cloud-zoom.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">


        <!--[if IE 9]>
                <link rel="stylesheet" href="css/ie9.css">
        <![endif]-->

        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="css/ie.css">
<![endif]-->

        <!--[if gt IE 8]>
                <link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->

        <!--[if IE 7]>
                <link rel="stylesheet" href="css/fontello-ie7.css">
        <![endif]-->

        <style type="text/css">
            .no-fouc {display:none;}
        </style>

        <!-- jQuery -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery-ui-1.10.4.min.js"></script>

        <!-- Preloader -->
        <script src="js/jquery.queryloader2.min.js"></script>

        <script type="text/javascript">
            $('html').addClass('no-fouc');

            $(document).ready(function () {

                $('html').show();

                var window_w = $(window).width();
                var window_h = $(window).height();
                var window_s = $(window).scrollTop();

                $("body").queryLoader2({
                    backgroundColor: '#EDEDED',
                    barColor: '#2E5CA5',
                    barHeight: 4,
                    percentage: true,
                    deepSearch: true,
                    minimumTime: 1000,
                    onComplete: function () {

                        $('.animate-onscroll').filter(function (index) {

                            return this.offsetTop < (window_s + window_h);

                        }).each(function (index, value) {

                            var el = $(this);
                            var el_y = $(this).offset().top;

                            if ((window_s) > el_y) {
                                $(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
                                setTimeout(function () {
                                    $(el).css('opacity', '1').removeClass('animated fadeInDown');
                                }, 2000);
                            }

                        });

                    }
                });

            });
        </script>

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></head>

    <body class="sticky-header-on tablet-sticky-header">

        <div id="fb-root"></div>
        <script class="">(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>		
        <!-- Container -->
        <div class="container">


            <!-- Header -->
            <?php include './menu_bisneto.php'; ?>
            <!-- /Header -->




            <section id="content">	


                <!-- Page Heading -->
                <section class="section page-heading animate-onscroll full-width-bg">

                    <p class="breadcrumb"><a href="index.php">Home</a> / contato</p>

                </section>
                <!-- Page Heading -->


                <!-- Section -->
                <section class="section full-width-bg gray-bg">

                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <h3>Envie uma mensagem para nossa equipe</h3>
                            <br/>


                            <form action="php/contact-form.php" method="POST">

                                <div class="inline-inputs">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label>Nome*</label>
                                        <input type="text" name="contact-firstname"> 	
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label>Sobrenome*</label>
                                        <input type="text" name="contact-lastname"> 	
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label>Email*</label>
                                        <input type="text" name="contact-email">								
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label>Telefone</label>
                                        <input type="text" name="contact-phone"> 	
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label>Assunto</label>
                                        <input type="text" name="contact-subject"> 		
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label>Destino</label>
                                        <select name="destino" class="chosen-select">
                                            <option value="United States">Assessoria</option>
                                            <option value="Germany">Gabinete</option>
                                        </select>		
                                    </div>


                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Sua mensagem</label>
                                        <textarea rows="10" name="contact-message"></textarea>
                                    </div>

                                </div>

                                <input type="submit" value="ENVIAR">

                            </form>
                            <hr/>

                            <div class="row">

                                <div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">

                                    <h4>GABINETE DO DEPUTADO</h4>
                                    <p>Câmara dos Deputados<br/> Praça dos Três Poderes<br/>
                                        Gabinete: 583 - Anexo: III </br>
                                        CEP.: 70160-900 • Brasília <br/> Distrito Federal - Brasil</p>

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">

                                    <h4>TELEFONES</h4>
                                    <p>• (061) 3215-5583<br/>
                                        • Fax: (061) 3215-2583</p>

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">

                                    <h4>EMAIL</h4>
                                    <p><a href="mailto:dep.arthurvirgiliobisneto@camara.leg.br">dep.arthurvirgiliobisneto@camara.leg.br</a><br>
                                        <a href="mailto:arthurbisneto.imprensa@gmail.com">arthurbisneto.imprensa@gmail.com</a></p>

                                </div>

                            </div>

                            <hr/>
                            <h3 class="animate-onscroll no-margin-top">SEDE MANAUS</h3>
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sbr!4v1450545550406!6m8!1m7!1sDJAFngeTyyT09DF-y5YvFg!2m2!1d-3.102319800945069!2d-60.02287194312335!3f66.30545267478117!4f-2.1829897673052443!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>



                            R. Rio Javari, 726-888 - Ns. das Gracas
                            Manaus - AM, 69053-110
                            -3.102290, -60.022845


                        </div>



                        <!-- Sidebar -->
                        <?php include './sidebar_bisneto.php'; ?>

                        <!-- /Sidebar -->




                    </div>

                </section>
                <!-- /Section -->

            </section>




            <!-- Footer -->
            <?php include './footer_bisneto.php'; ?> 
            <!-- // Footer -->



            <!-- voltar ao topo -->
            <a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>

        </div>
        <!-- /Container -->	

        <!-- JavaScript -->

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- Modernizr -->
        <script type="text/javascript" src="js/modernizr.js"></script>

        <!-- Sliders/Carousels -->
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>

        <!-- Revolution Slider  -->
        <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Calendar -->
        <script type="text/javascript" src="js/responsive-calendar.min.js"></script>

        <!-- Raty -->
        <script type="text/javascript" src="js/jquery.raty.min.js"></script>

        <!-- Chosen -->
        <script type="text/javascript" src="js/chosen.jquery.min.js"></script>

        <!-- jFlickrFeed -->
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>

        <!-- InstaFeed -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>

        <!-- Twitter -->
        <script type="text/javascript" src="php/twitter/jquery.tweet.js"></script>

        <!-- MixItUp -->
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>

        <!-- JackBox -->
        <script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>

        <!-- CloudZoom -->
        <script type="text/javascript" src="js/zoomsl-3.0.min.js"></script>

        <!-- Main Script -->
        <script type="text/javascript" src="js/script.js"></script>


        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/jquery.placeholder.js"></script>
                <script type="text/javascript" src="js/script_ie.js"></script>
        <![endif]-->




    </body></html>