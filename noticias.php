<?php
include './admin/conections/conexao.php';
?>
<html><head>

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
                <section class="section page-heading animate-onscroll ">

                    <p class="breadcrumb"><a href="index.php">Home</a> / <a href="lista-noticias.php">Notícias</a></p>

                </section>
                <!-- Page Heading -->



                <!-- Section -->
                <section class="section full-width-bg gray-bg">

                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-8">

                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <?php
                                    $id_noticia = $_GET['id'];

                                    $seleciona_noticia = "SELECT * FROM noticia WHERE noticia_id = $id_noticia";
                                    $executa_seleciona = mysql_query($seleciona_noticia)or die(mysql_error());
                                    $dados_noticia = mysql_fetch_array($executa_seleciona);


                                    $nova_data = explode("-", $dados_noticia['data_noticia']);

                                    function retorna_mes($MES) {
                                        switch ($MES) {
                                            case 1 : $MES = 'Janeiro';
                                                break;
                                            case 2 : $MES = 'Fevereiro';
                                                break;
                                            case 3 : $MES = 'Março';
                                                break;
                                            case 4 : $MES = 'Abril';
                                                break;
                                            case 5 : $MES = 'Maio';
                                                break;
                                            case 6 : $MES = 'Junho';
                                                break;
                                            case 7 : $MES = 'Julho';
                                                break;
                                            case 8 : $MES = 'Agosto';
                                                break;
                                            case 9 : $MES = 'Setembro';
                                                break;
                                            case 10 : $MES = 'Outubro';
                                                break;
                                            case 11 : $MES = 'Novembro';
                                                break;
                                            case 12 : $MES = 'Dezembro';
                                                break;
                                        }
                                        return $MES;
                                    }
                                    ?>


                                    <h1 class="animate-onscroll"><?php echo $dados_noticia['titulo']; ?></h1>
                                    <hr class="animate-onscroll" style="margin:5px;">
                                    <ul class="social-buttons animate-onscroll">

                                        <li class="facebook-share">
                                            <div class="fb-share-button" data-href="https://www.facebook.com/arthurvirgiliobisneto" data-type="button_count"></div>
                                        </li>
                                        <li class="twitter-share">
                                            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                        </li>
                                    </ul>
                                    <hr class="animate-onscroll" style="margin:5px;">







                                    <p class="animate-onscroll" style="font-size: 10px; color: #c0c0c0c0;">Publicado em <?php echo $nova_data[0], " de "; ?>  <?php echo retorna_mes($nova_data[1]) . " de "; ?> <?php echo $nova_data[2]; ?></p>


                                    <img class="animate-onscroll" src="admin/imagens/noticia/<?php echo $dados_noticia['img']; ?>" alt=""><!-- FOTO -->
                                    <div class="legenda animate-onscroll"><?php echo $dados_noticia['legenda']; ?></div> <!-- legenda da foto -->

                                    <br/>

                                    <p style="text-align: justify;" class="animate-onscroll">
                                        <?php echo $dados_noticia['texto']; ?>

                                        <!--<blockquote class="align-right animate-onscroll" style="width:45%">
                                        <?php echo $dados_noticia['texto_detalhe']; ?>
                                        </blockquote>
    
                                        <?php echo $dados_noticia['texto']; ?>-->
                                    </p>





                                </div>

                            </div>

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