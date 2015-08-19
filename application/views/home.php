<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Deputado Arthur Bisneto</title>

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/psdb-ico.png">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/fontello.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/js/revolution-slider/css/settings.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/responsive-calendar.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/chosen.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/jackbox/css/jackbox.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/cloud-zoom.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/style.css">


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
        <script src="<?php echo base_url(); ?>template/js/jquery-1.11.0.min.js"></script>
        <script src="<?php echo base_url(); ?>template/js/jquery-ui-1.10.4.min.js"></script>

        <!-- Preloader -->
        <script src="<?php echo base_url(); ?>template/js/jquery.queryloader2.min.js"></script>

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

    </head>

    <body class="sticky-header-on tablet-sticky-header">

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
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

                                <a href="index.html"><img src="<?php echo base_url(); ?>template/img/Topo-Site-1.png"alt="Logo"></a>

                            </div>
                            <!-- /Logo arthur-->



                            <!-- foto arthur bisneto -->
                            <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll" style="margin: 0px; padding: 0px;">
                                <img src="<?php echo base_url(); ?>template/img/Topo-Site-2.png"alt="" />

                            </div>
                            <!-- // foto arthur bisneto -->

                            <!-- Main Quote -->
                            <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll" style="margin: 0px; padding: 0px;">
                                <img src="<?php echo base_url(); ?>template/img/Topo-Site-3.png" alt="" />

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

                                <a href="index.html"><i class="icons icon-home"></i></a>

                            </li>
                            <!-- /Home -->

                            <!-- biografia -->
                            <li >

                                <a href="#">BIOGRAFIA</a>

                            </li>
                            <!-- // biografia -->

                            <!-- opniao -->
                            <li >

                                <a href="#">OPINIÃO</a>

                            </li>
                            <!-- // opiniao -->

                            <!-- DEP. na midia -->
                            <li >

                                <a href="#">DEPUTADO NA MÍDIA</a>

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
                                        <a href="#">fotos</a>
                                    </li>

                                    <li>
                                        <a href="#">videos</a>
                                    </li>


                                </ul>

                            </li>
                            <!-- // galeria -->


                            <!-- CONTATO-->
                            <li >

                                <span>CONTATO</span>

                                <ul>

                                    <li>
                                        <a href="#">sala de imprensa</a>
                                    </li>

                                    <li>
                                        <a href="#">contatos</a>
                                    </li>


                                </ul>

                            </li>
                            <!-- // CONTATO -->

                            <!-- Donate -->
                            <li class="donate-button ">
                                <a style=" padding: 0px; border: none;" href="#"><img src="<?php echo base_url(); ?>template/img/logo-PSDB.png" alt="" /></a>

                            </li>
                            <!-- /Donate -->

                        </ul>

                    </div>

                </div>
                <!-- /Lower Header -->


            </header>
            <!-- /Header -->




            <section id="content">

                <!-- Section -->
                <section class="section full-width-bg">

                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-8">

                            <!-- Main Slider -->
                            <div class="flexslider main-flexslider animate-onscroll">

                                <ul class="slides">

                                    <li id="main_flex_2" style="background: url(img/slide-temp1.jpg) no-repeat;"> </li>

                                    <li id="main_flex_2" style="background: url(img/fotos/arthur-bisneto02.jpg) no-repeat;">

                                        <div class="slide align-center">
                                            <h2>Arthur Bisneto propõe estimular a qualificação dos beneficiários do programa Minha Casa, Minha Vida</h2>
                                        </div>

                                    </li>

                                    <li id="main_flex_2" style="background: url(img/slide-temp2.jpg) no-repeat;"> </li>

                                    <li id="main_flex_2" style="background: url(img/fotos/arthur-bisneto.jpg) no-repeat;">

                                        <div class="slide align-center">
                                            <h2>Arthur Virgílio Bisneto propõe blindagem nos vidros das viaturas da segurança pública</h2>
                                        </div>

                                    </li>


                                    <li id="main_flex_2" style="background: url(img/fotos/arthur-bisneto03.jpg) no-repeat;">

                                        <div class="slide align-center">
                                            <h2>Bisneto vota a favor da redução da maioridade penal</h2>
                                        </div>

                                    </li>


                                </ul>

                            </div>	
                            <!-- /Main Slider -->

                        </div>


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
                                <ul class="social-buttons">
                                    <li>
                                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Farthurvirgiliobisneto&amp;width=50&amp;height=21&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:21px;" allowTransparency="true"></iframe>
                                    </li>
                                    <li class="facebook-share">
                                        <div class="fb-share-button" data-href="https://www.facebook.com/arthurvirgiliobisneto" data-type="button_count"></div>
                                    </li>
                                    <li class="twitter-share">
                                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-calendar"></i>
                                    <h4>AGENDA<br/> PARLAMENTAR</h4>
                                </a>
                            </div>

                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-check"></i>
                                    <h4>OPNIÃO DO<br/> DEPUTADO</h4>
                                </a>
                            </div>

                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-user"></i>
                                    <h4>SALA DE <br/>IMPRENSA</h4>
                                </a>
                            </div>
                            <div class="banner-wrapper">
                                <a class="banner animate-onscroll" href="#">
                                    <i class="icons icon-camera-alt"></i>
                                    <h4>CLIPPING</h4>
                                    <P> Tudo sobre o Deputado</P>
                                </a>
                            </div>


                        </div>

                    </div>

                </section>
                <!-- /Section -->




                <!-- Section -->
                <section class="section full-width-bg gray-bg">

                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-8">

                            <h1 class="animate-onscroll no-margin-top">OPINIÃO</h1>

                            <!-- Blog Post -->
                            <div class="blog-post big animate-onscroll">

                                <div class="post-image">
                                    <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto02.jpg" alt="">
                                </div>

                                <h5 class="post-title"><a href="blog-single-sidebar.html">Para além de Parintins </a></h5>

                                <div class="post-meta">
                                    <span>29 de junho de 2015 •  11:28AM</span>
                                </div>

                                <p>Realizado no último final de semana, o Festival Folclórico de Parintins completou a marca fantástica de 50 edições. Nós, do Amazonas, temos mais do que ninguém a dimensão do que isso representa para a nossa gente, para a nossa cultura.</p>

                                <a href="blog-single-sidebar.html" class="button read-more-button button-arrow">ler mais...</a>

                            </div>
                            <!-- /Blog Post -->						
                            <!-- Owl Carousel -->
                            <div class="owl-carousel-container">

                                <div class="owl-header">

                                    <h3 class="animate-onscroll">MAIS NOTÍCIAS</h3>

                                    <div class="carousel-arrows animate-onscroll">
                                        <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                        <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                                    </div>

                                </div>

                                <div class="owl-carousel" data-max-items="3">

                                    <!-- Owl Item -->
                                    <div>

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto03.jpg" alt="">
                                            </div>

                                            <h5 class="post-title"><a href="#">Arthur quer informações sobre situação das representações diplomáticas brasileiras no exterior</a></h5>


                                            <p>O deputado federal Arthur Virgílio Bisneto (PSDB-AM) solicitou ao Ministério das Relações Exteriores, por meio de requerimento apresentado...</p>


                                        </div>
                                        <!-- /Blog Post -->

                                    </div>
                                    <!-- /Owl Item -->

                                    <!-- Owl Item -->
                                    <div>

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto.jpg" alt="">
                                            </div>

                                            <h5 class="post-title"><a href="#">Bisneto é favorável à emenda que aplica reajuste do mínimo a aposentadorias e pensões </a></h5>

                                            <p>Na votação da emenda à Medida Provisória 672/15, que estende os aumentos do salário mínimo aos demais benefícios da Previdência Social (aposentadorias e pensões) nesta quarta-feira (24), na Câmara Federal</p>


                                        </div>
                                        <!-- /Blog Post -->

                                    </div>
                                    <!-- /Owl Item -->

                                    <!-- Owl Item -->
                                    <div>

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto02.jpg" alt="">
                                            </div>

                                            <h5 class="post-title"><a href="#">Arthur propõe fim do sigilo a operações realizadas pelo BNDES para financiar projetos de investimento no exterior</a></h5>

                                            <p>Com o intuito de decretar o fim do sigilo a empréstimos realizados pelo Banco Nacional de Desenvolvimento Econômico e Social (BNDES), o deputado federal Arthur Virgílio Bisneto (PSDB-AM),</p>

                                        </div>
                                        <!-- /Blog Post -->

                                    </div>
                                    <!-- /Owl Item -->

                                    <!-- Owl Item -->
                                    <div>

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto03.jpg" alt="">
                                            </div>

                                            <h5 class="post-title"><a href="#">Arthur quer informações sobre situação das representações diplomáticas brasileiras no exterior</a></h5>


                                            <p>O deputado federal Arthur Virgílio Bisneto (PSDB-AM) solicitou ao Ministério das Relações Exteriores, por meio de requerimento apresentado...</p>


                                        </div>
                                        <!-- /Blog Post -->

                                    </div>
                                    <!-- /Owl Item -->

                                    <!-- Owl Item -->
                                    <div>

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto.jpg" alt="">
                                            </div>

                                            <h5 class="post-title"><a href="#">Bisneto é favorável à emenda que aplica reajuste do mínimo a aposentadorias e pensões </a></h5>

                                            <p>Na votação da emenda à Medida Provisória 672/15, que estende os aumentos do salário mínimo aos demais benefícios da Previdência Social (aposentadorias e pensões) nesta quarta-feira (24), na Câmara Federal</p>


                                        </div>
                                        <!-- /Blog Post -->

                                    </div>
                                    <!-- /Owl Item -->

                                    <!-- Owl Item -->
                                    <div>

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/fotos/arthur-bisneto02.jpg" alt="">
                                            </div>

                                            <h5 class="post-title"><a href="#">Arthur propõe fim do sigilo a operações realizadas pelo BNDES para financiar projetos de investimento no exterior</a></h5>

                                            <p>Com o intuito de decretar o fim do sigilo a empréstimos realizados pelo Banco Nacional de Desenvolvimento Econômico e Social (BNDES), o deputado federal Arthur Virgílio Bisneto (PSDB-AM),</p>

                                        </div>
                                        <!-- /Blog Post -->

                                    </div>
                                    <!-- /Owl Item -->

                                </div>

                            </div>
                            <!-- /Owl Carousel -->	

                            <!-- Related Articles -->
                            <div class="related-articles">

                                <h3 class="animate-onscroll">GALERIA DE IMAGENS</h3>

                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-4">

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/banner/banner.png" alt="">
                                            </div>

                                        </div>
                                        <!-- /Blog Post -->

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/banner/banner2.jpg" alt="">
                                            </div>

                                        </div>
                                        <!-- /Blog Post -->

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">

                                        <!-- Blog Post -->
                                        <div class="blog-post animate-onscroll">

                                            <div class="post-image">
                                                <img src="<?php echo base_url(); ?>template/img/banner/banner3.png" alt="">
                                            </div>

                                        </div>
                                        <!-- /Blog Post -->

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll" style="margin-top: 20px;">
                                        <a href="galeria.html" class="button donate button-arrow">toda galeria</a>
                                    </div>
                                </div>

                            </div>
                            <!-- /Related Articles -->	
                            <hr/>				

                            <!-- Banner Rotator -->
                            <div class="banner-rotator animate-onscroll">

                                <div class="flexslider banner-rotator-flexslider">

                                    <ul class="slides">

                                        <li id="flex_rotator_1">
                                            <!--<div class="banner-rotator-content">
                                                    <h5>Campaign trial</h5>
                                                    <h2>New York</h2>
                                                    <span class="date">December 17th</span>
                                            </div>-->
                                        </li>

                                        <!--<li id="flex_rotator_2">
                                                <div class="banner-rotator-content">
                                                        <h5>Campaign trial</h5>
                                                        <h2>Corden</h2>
                                                        <span class="date">April 12th</span>
                                                        <a href="#" class="button big button-arrow">Details</a>
                                                </div>
                                        </li>-->


                                    </ul>

                                </div>

                            </div>
                            <!-- /Banner Rotator -->


                            <div class="col-lg-10 col-md-10 col-sm-10 animate-onscroll">
                                <h4>DEPUTADO ARTHUR VIRGILIO BISNETO</h4>
                                <p>É deputado federal pelo PSDB do Amazonas. Na Câmara Federal assumiu a vice-liderança do Bloco da Oposição. É membro titular na Comissão de Minas e Energia (CME) e na Comissão de Integração Nacional, Desenvolvimento Regional e da Amazônia (Cindra) e suplente na Comissão de Ciência e Tecnologia, Comunicação e Informática (CCTCI).</p>


                                <a href="biografia.html" class="button read-more-button button-arrow">ler mais...</a>

                            </div>
                        </div>



                        <!-- Sidebar -->
                        <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
                            <!-- Featured Video -->
                            <div class="sidebar-box featured-video animate-onscroll fundo-listra">
                                <h3><strong>VÍDEO</strong></h3>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Lcubw2IeNtM?wmode=transparent" allowfullscreen></iframe>
                                <a href="#" class="button transparent button-arrow">todos os videos</a>
                            </div>
                            <!-- /Featured Video -->

                            <hr/ style="border-bottom: 1px solid #EDEDED;">

                                <!-- Image Banner -->
                                <div class="sidebar-box image-banner animate-onscroll">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>template/img/capa-informativo.jpg" alt="">
                                    <h3>INFORMATIVO EDIÇÃO 230</h3>
                                    <span class="button  button-arrow">VER TODOS</span>
                                </a>
                            </div>
                            <!-- /Image Banner -->

                            <hr/ style="border-bottom: 1px solid #EDEDED;">

                                <!-- Instagram Photos -->
                                <div class="sidebar-box white flickr-photos animate-onscroll">
                                <h3>Nosso Instagram</h3>
                                <ul id="instagram-feed">
                                </ul>
                            </div>
                            <!-- /Instagram Photos -->	

                            <hr/ style="border-bottom: 1px solid #EDEDED;">		

                                <!-- Flickr Photos -->
                                <div class="sidebar-box white flickr-photos animate-onscroll">
                                <h3>Fotos do Flickr</h3>
                                <ul class="flickr-feed">
                                </ul>
                            </div>
                            <!-- /Flickr Photos -->	

                            <hr/ style="border-bottom: 1px solid #EDEDED;">	

                                <!-- Categories -->
                                <div class="sidebar-box category-box white animate-onscroll">

                                <h3>LINKS ÚTEIS</h3>
                                <ul>
                                    <li><a href="#">Câmara dos Deputados</a></li>
                                    <li><a href="#">PSDB Nacional</a></li>
                                    <li><a href="#">PSDB Regional</a></li>
                                    <li><a href="#">Prefeitura de Manaus</a></li>
                                    <li><a href="#">Governo do Amazonas</a></li>
                                    <li><a href="#">Assembléia Legislativa AM</a></li>
                                    <li><a href="#">Câmara Municipal</a></li>
                                    <li><a href="#">DETRAN-AM</a></li>
                                    <li><a href="#">SEDUC-AM</a></li>
                                </ul>

                            </div>
                            <!-- /Categories -->					

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

        <script src="<?php echo base_url(); ?>template/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Modernizr -->
        <script src="<?php echo base_url(); ?>template/js/modernizr.js" type="text/javascript"></script>

        <!-- Sliders/Carousels -->
        <script src="<?php echo base_url(); ?>template/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/owl.carousel.min.js" type="text/javascript"></script>


        <!-- Revolution Slider  -->
        <script src="<?php echo base_url(); ?>template/js/revolution-slider/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>template/js/revolution-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

        <!-- Calendar -->
        <script src="<?php echo base_url(); ?>template/js/responsive-calendar.min.js" type="text/javascript"></script>

        <!-- Raty -->
        <script src="<?php echo base_url(); ?>template/js/jquery.raty.min.js" type="text/javascript"></script>

        <!-- Chosen -->
        <script src="<?php echo base_url(); ?>template/js/chosen.jquery.min.js" type="text/javascript"></script>

        <!-- jFlickrFeed -->
        <script src="<?php echo base_url(); ?>template/js/jflickrfeed.min.js" type="text/javascript"></script>

        <!-- InstaFeed -->
        <script src="<?php echo base_url(); ?>template/js/instafeed.min.js" type="text/javascript"></script>

        <!-- Twitter -->
        <script src="<?php echo base_url(); ?>template/php/twitter/jquery.tweet.js" type="text/javascript"></script>

        <!-- MixItUp -->
        <script src="<?php echo base_url(); ?>template/js/jquery.mixitup.js" type="text/javascript"></script>

        <!-- JackBox -->
        <script src="<?php echo base_url(); ?>template/jackbox/js/jackbox-packed.min.js" type="text/javascript"></script>

        <!-- CloudZoom -->
        <script src="<?php echo base_url(); ?>template/js/zoomsl-3.0.min.js" type="text/javascript"></script>

        <!-- Main Script -->
        <script src="<?php echo base_url(); ?>template/js/script.js" type="text/javascript"></script>

        
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/jquery.placeholder.js"></script>
                <script type="text/javascript" src="js/script_ie.js"></script>
        <![endif]-->


    </body>

</html>