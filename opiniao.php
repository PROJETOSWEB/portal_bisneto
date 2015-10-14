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
            <header id="header" class="animate-onscroll">

                <!-- Main Header -->
                <div id="main-header">

                    <div class="container">

                        <div class="row">


                            <!-- Logo arthur -->
                            <div id="logo" class="col-lg-4 col-md-4 col-sm-4 animate-onscroll" style="margin: 0px; padding: 0px;">

                                <a href="indexxx.html"><img src="img/Topo-Site-1.png" alt="Logo"></a>

                            </div>
                            <!-- /Logo arthur-->



                            <!-- foto arthur bisneto -->
                            <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll" style="margin: 0px; padding: 0px;">
                                <img src="img/Topo-Site-2.png" alt="">

                            </div>
                            <!-- // foto arthur bisneto -->

                            <!-- Main Quote -->
                            <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll" style="margin: 0px; padding: 0px;">
                                <img src="img/Topo-Site-3.png" alt="">

                            </div>
                            <!-- /Main Quote -->



                            <!-- Newsletter -->
                            <!--<div class="col-lg-4 col-md-5 col-sm-5">
                                    
                                    <form id="newsletter" action="php/newsletter-form.php" method="POST">
                                            
                                            <h5><strong>Sign up</strong> for email updates</h5>
                                            <div class="newsletter-form">
                                            
                                                    <div class="newsletter-email">
                                                            <input type="text" name="newsletter-email" placeholder="Email address">
                                                    </div>
                                                    
                                                    <div class="newsletter-zip">
                                                            <input type="text" name="newsletter-zip" placeholder="Zip code">
                                                    </div>
                                                    
                                                    <div class="newsletter-submit">
                                                            <input type="submit" value="">
                                                            <i class="icons icon-right-thin"></i>
                                                    </div>
                                                    
                                            </div>
                                            
                                    </form>
                                    
                            </div>-->
                            <!-- /Newsletter -->



                        </div>

                    </div>

                </div>
                <!-- /Main Header -->





                <!-- Lower Header -->
                <div id="lower-header">

                    <div class="container">

                        <div id="menu-button">
                            <div>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <span>Menu MOBILE</span>
                        </div>
                        
                        <ul id="navigation">

                            <!-- Home -->
                            <li class="home-button current-menu-item">

                                <a href="index.php"><i class="icons icon-home"></i></a>

                            </li>
                            <!-- /Home -->

                            <!-- biografia -->
                            <li >

                                <a href="biografia.php">BIOGRAFIA</a>

                            </li>
                            <!-- // biografia -->

                            <!-- opniao -->
                            <li >

                                <a href="lista-opiniao.php">OPINIÃO</a>

                            </li>
                            <!-- // opiniao -->

                            <!-- DEP. na midia -->
                            <li >

                                <a href="midia.php">DEPUTADO NA MÍDIA</a>

                            </li>
                            <!-- // dep. na midia -->

                            <!-- DEP. na midia -->
                            <li >

                                <a href="#">ATIVIDADE PARLAMENTAR</a>

                            </li>
                            <!-- // dep. na midia -->

                            <!-- GALERIA-->
                            <li >

                                <span>GALERIA</span>

                                <ul>

                                    <li>
                                        <a href="fotos.php">fotos</a>
                                    </li>

                                    <li>
                                        <a href="videos.php">videos</a>
                                    </li>


                                </ul>

                            </li>
                            <!-- // galeria -->


                            <!-- CONTATO-->
                            <li >

                                <span>CONTATO</span>

                                <ul>

                                    <li>
                                        <a href="imprensa.php">sala de imprensa</a>
                                    </li>

                                    <li>
                                        <a href="#">contatos</a>
                                    </li>


                                </ul>

                            </li>
                            <!-- // CONTATO -->

                            <!-- Donate -->
                            <li class="donate-button ">
                                <a style=" padding: 0px; border: none;" href="#"><img src="img/logo-PSDB.png" alt="" /></a>

                            </li>
                            <!-- /Donate -->

                        </ul>

                    </div>

                </div>
                <!-- /Lower Header -->


            </header>
            <!-- /Header -->




            <section id="content">	

                <!-- Page Heading -->
                <section class="section page-heading animate-onscroll ">

                    <p class="breadcrumb"><a href="index.php">Home</a> / <a href="lista-opiniao.php">Home</a> / Titulo da opiniao</p>

                </section>
                <!-- Page Heading -->



                <!-- Section -->
                <section class="section full-width-bg gray-bg">

                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-8">

                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12">


                                    <?php
                                    $id = $_GET['id'];
                                    $seleciona_opiniao = "SELECT * FROM opiniao WHERE opiniao_id = $id";
                                    $executa_seleciona_opiniao = mysql_query($seleciona_opiniao)or die(mysql_error());
                                    $dados_opiniao = mysql_fetch_array($executa_seleciona_opiniao);


                                    $nova_data = explode("-", $dados_opiniao['data']);

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


                                    <h1 class="animate-onscroll"><?php echo $dados_opiniao['titulo']; ?></h1>
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
                                    <p class="animate-onscroll" style="font-size: 10px; color: #c0c0c0c0;">Publicado em: <?php echo $nova_data[0], " de "; ?>  <?php echo retorna_mes($nova_data[1]) . " de "; ?> <?php echo $nova_data[2]; ?></p>


                                    <img class="animate-onscroll" src="admin/imagens/opiniao/<?php echo $dados_opiniao['foto']; ?>" alt=""><!-- FOTO -->
                                    <div class="legenda animate-onscroll"><?php echo $dados_opiniao['legenda']; ?></div> <!-- legenda da foto -->

                                    <br>

                                    <p class="animate-onscroll">
                                        “Minha opinião é muito clara no sentido de nós acabarmos com a impunidade dos jovens entre 16 e 18 anos que cometem crimes graves neste país”,  afirmou o deputado federal Arthur Virgílio Bisneto (PSDB-AM), vice-líder da Oposição, durante votação do texto da comissão especial para a PEC que reduz a maioridade penal (PEC 171/93). O plenário da Câmara Federal rejeitou o texto. Foram 303 votos a favor, quando o mínimo necessário eram 308. Foram 184 votos contra e três abstenções.<br><br>

                                   <!-- <blockquote class="align-right animate-onscroll" style="width:45%">
                                        "Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar."
                                    </blockquote>-->

                                    Durante a discussão da proposta, o vice-líder da Oposição liberou a bancada para a votação. “Eu respeito a opinião da bancada daqueles que votam não, mas acredito que os jovens de 16 e 17 anos sabem muito bem o que fazem.  Não digam que são pessoas que não sabem a responsabilidade e o que é cometer um crime contra uma família ou contra um cidadão. Eu falo aqui como pai de dois filhos, eu falo aqui como alguém que se põe no lugar dessas mães e sabe o sofrimento que é perder um filho para criminalidade e ver a impunidade cada vez mais forte”, ressaltou Bisneto.<br><br>

                                    A proposta rejeitada reduziria de 18 para 16 anos a maioridade penal para crimes hediondos, como estupro, latrocínio e homicídio qualificado (quando há agravantes). O adolescente dessa faixa etária também poderia ser condenado por crimes de lesão corporal grave ou lesão corporal seguida de morte e roubo agravado (quando há uso de arma ou participação de dois ou mais criminosos, entre outras circunstâncias). O texto original, que pode ir à votação nesta quarta-feira (1°), reduz a maioridade para 16 em todos os casos.
                                    </p>





                                </div>

                            </div>





                        </div>



                        <!-- Sidebar -->
                        <div class="col-lg-3 col-md-3 col-sm-4 sidebar">

                            <div class="social-media animate-onscroll">
                                <span class="small-caption">CONECTE-SE COM A GENTE</span>
                                <ul class="social-icons">
                                    <li class="facebook"><a href="https://www.facebook.com/arthurvirgiliobisneto" target="_blank" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook-1"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/arthurbisneto" target="_blank" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter-1"></i></a></li>
                                    <li class="instagram"><a href="https://instagram.com/arthurbisnetooficial" target="_blank" class="tooltip-ontop" title="Instagram"><i class="icons icon-instagram-1"></i></a></li>
                                    <li class="youtube"><a href="https://www.youtube.com/user/arthurbisneto" target="_blank" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                                    <li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-1"></i></a></li>
                                    <li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail-1"></i></a></li>
                                </ul>

                            </div>

                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-calendar"></i>
                                    <h4>AGENDA<br> PARLAMENTAR</h4>
                                </a>
                            </div>

                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-check"></i>
                                    <h4>OPNIÃO DO<br> DEPUTADO</h4>
                                </a>
                            </div>

                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-user"></i>
                                    <h4>SALA DE <br>IMPRENSA</h4>
                                </a>
                            </div>
                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-camera-alt"></i>
                                    <h4>CLIPPING</h4>
                                    <p> Tudo sobre o Deputado</p>
                                </a>
                            </div>


                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 sidebar">

                            <hr style="border-bottom: 1px solid #EDEDED;">

                            <!-- Featured Video -->
                            <div class="sidebar-box featured-video animate-onscroll fundo-listra">
                                <h3><strong>VÍDEO</strong></h3>
                                <iframe src="https://www.youtube.com/embed/Lcubw2IeNtM?wmode=transparent" allowfullscreen="" height="315" width="560"></iframe>
                                <a href="#" class="button transparent button-arrow">todos os videos</a>
                            </div>
                            <!-- /Featured Video -->

                            <hr style="border-bottom: 1px solid #EDEDED;">

                            <!-- Instagram Photos -->
                            <div class="sidebar-box white flickr-photos animate-onscroll">
                                <h3>Nosso Instagram</h3>
                                <ul id="instagram-feed">
                                </ul>
                            </div>
                            <!-- /Instagram Photos -->	

                            <hr style="border-bottom: 1px solid #EDEDED;">		

                            <!-- Flickr Photos -->
                            <div class="sidebar-box white flickr-photos animate-onscroll">
                                <h3>Fotos do Flickr</h3>
                                <ul class="flickr-feed">
                                </ul>
                            </div>
                            <!-- /Flickr Photos -->	

                            <hr style="border-bottom: 1px solid #EDEDED;">

                        </div>

                        <!-- /Sidebar -->




                    </div>

                </section>
                <!-- /Section -->

            </section>




            <!-- Footer -->
            <footer id="footer">






                <!-- Lower Footer -->
                <div id="lower-footer">

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll">

                            <p class="copyright">copyright © 2015 • Todos os direitos reservados</p>

                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8 animate-onscroll">

                            <div class="social-media">
                                <ul class="social-icons">
                                    <li class="facebook"><a href="https://www.facebook.com/arthurvirgiliobisneto" target="_blank" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook-1"></i></a></li>
                                    <li class="twitter"><a href="https://twitter.com/arthurbisneto" target="_blank" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter-1"></i></a></li>
                                    <li class="instagram"><a href="https://instagram.com/arthurbisnetooficial" target="_blank" class="tooltip-ontop" title="Instagram"><i class="icons icon-instagram-1"></i></a></li>
                                    <li class="youtube"><a href="https://www.youtube.com/user/arthurbisneto" target="_blank" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                                    <li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-1"></i></a></li>
                                    <li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail-1"></i></a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /Lower Footer -->


            </footer>
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