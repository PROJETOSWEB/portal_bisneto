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

                    <?php
                    $album = $_GET['album'];
                    $seleciona_album = "SELECT * FROM album_fotos WHERE album_fotos_id =$album ";
                    $executa_seleciona_album = mysql_query($seleciona_album)or die(mysql_error());
                    $dados_album = mysql_fetch_array($executa_seleciona_album);
                    ?>



                    <h1><?php echo $dados_album['nome']; ?></h1>
                    <p class="breadcrumb"><a href="index.php">Home</a> / Galeria / nome do album</p>





                </section>
                <!-- Page Heading -->



                <!-- Section -->
                <section class="section full-width-bg gray-bg">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">


                            <div class="media-items row">

<?php
//PEGANDO PAGINA ATUAL
$p = $_GET["page"];
if (isset($p)) {
    $p = $p;
} else {
    $p = 1;
}

//DEFININDO A QUANTIDADE DE REGISTROS POR PAGINA

$qnt = 8;
$inicio = ($p * $qnt) - $qnt;



$seleciona_fotos = "SELECT * FROM fotos WHERE album_fotos_id = $album ORDER BY fotos_id DESC LIMIT $inicio, $qnt";

$executa_seleciona_fotos = mysql_query($seleciona_fotos)or die(mysql_error());

while ($array_fotos = mysql_fetch_array($executa_seleciona_fotos)) {
    ?>

                                    <!-- item IMAGENS -->
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="media-item animate-onscroll gallery-media">

                                            <div class="media-image">
                                                <img src="admin/imagens/fotos/<?php echo $array_fotos['foto'] ?>" alt="">

                                                <div class="media-hover">
                                                    <div class="media-icons">
                                                        <a href="admin/imagens/fotos/<?php echo $array_fotos['foto']; ?>" 
                                                           data-group="media-jackbox" 
                                                           data-thumbnail="admin/imagens/fotos/<?php echo $array_fotos['foto']; ?>" 
                                                           data-title="<?php echo $array_fotos['legenda'] ?>"
                                                           class="jackbox media-icon">
                                                            <i class="icons icon-zoom-in"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>							
                                    </div>
                                    <!-- // item IMAGENS -->


    <?php
}
?>





                                <!-- item VIDEOS -->
                                <!--                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                                    <div class="media-item animate-onscroll gallery-media">
                                
                                                                        <div class="media-image">
                                                                            <img src="img/media/media2-medium.jpg" alt="">
                                
                                                                            <div class="media-hover">
                                                                                <div class="media-icons">
                                                                                    <a href="https://www.youtube.com/watch?v=1WbQe-wVK9E" 	
                                                                                       data-group="media-jackbox" 
                                                                                       data-thumbnail="img/media/media2-medium.jpg" 
                                                                                       data-title="LEGENDA LEGENDA"
                                                                                       class="jackbox media-icon">
                                                                                        <i class="icons icon-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                
                                                                        </div>
                                
                                
                                                                    </div>							
                                                                </div>-->
                                <!-- // item VIDEOS -->







                            </div>


                            <div class="animate-onscroll">

                                <div class="divider"></div>


                                <div class="numeric-pagination">

<?php
$sql_video_count = "SELECT * FROM fotos WHERE album_fotos_id = $album ORDER BY fotos_id DESC";
$sql_query_all = mysql_query($sql_video_count)or die(mysql_error());
$total_registros = mysql_num_rows($sql_query_all);
$pags = ceil($total_registros / $qnt);

// Número máximos de botões de paginação 
$max_links = 5;


if (isset($_GET['page'])) {


    if ($_GET['page'] == 1) {
        ?>
                                            <a href="item_fotos_album.php?page=1&album=<?php echo $album; ?>" class="button"><i class="icons icon-left-dir"></i></a>


                                            <?php
                                        } else {
                                            ?>
                                            <a href="item_fotos_album.php?page=<?php echo $p - 1; ?>&album=<?php echo $album; ?>" class="button"><i class="icons icon-left-dir"></i></a>

                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <a href="item_fotos_album.php?page=1&album=<?php echo $album; ?>" class="button"><i class="icons icon-left-dir"></i></a>

                                        <?php
                                    }
                                    ?>


                                    <?php
                                    for ($i = $p - $max_links; $i <= $p - 1; $i++) {

                                        if ($i <= 0) {

                                            //FAZ NADA
                                        } else {
                                            ?> 
                                            <a href="item_fotos_album.php?page=<?php echo $i; ?>&album=<?php echo $album; ?>" class="button"><?php echo $i; ?></a>
                                            <?php
                                        }
                                    }


                                    echo "<a href='#' class='button active-button'>$p</a>";

                                    for ($i = $p + 1; $i <= $p + $max_links; $i++) {


                                        if ($i > $pags) {

                                            //FAZ NADA
                                        } else {
                                            ?>
                                            <a href="item_fotos_album.php?album=<?php echo $album; ?>&page=<?php echo $i; ?>" class="button"><?php echo $i; ?></a>

                                            <?php
                                        }
                                    }


                                    if (isset($_GET['page'])) {

                                        if ($_GET['page'] == $pags) {
                                            ?>
                                            <a href="item_fotos_album.php?page=<?php echo $pags ?>&album=<?php echo $album; ?>" class="button"><i class="icons icon-right-dir"></i></a>

                                            <?php
                                        } else {
                                            ?>
                                            <a href="item_fotos_album.php?page=<?php echo $p + 1; ?>&album=<?php echo $album; ?>" class="button"><i class="icons icon-right-dir"></i></a>

                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <a href="item_fotos_album.php?page=<?php echo $pags ?>&album=<?php echo $album; ?>" class="button"><i class="icons icon-right-dir"></i></a>

                                        <?php
                                    }
                                    ?>


                                </div>



                            </div>


                        </div>








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