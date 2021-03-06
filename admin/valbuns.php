<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-reset.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
<link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />


</br></br>
<section id="container" class="">

    <section id="main-content">
        <section class="wrapper site-min-height">

            <h1 style="font-weight: 300;"><span class="fa fa-camera-retro"></span> LISTA DE ÁLBUNS</h1>
            <hr style="border: 1px solid #333;">
            <div class="divider"></div>
            <div class="divider"></div>

            </br>


            <?php
            if (isset($_GET['respt'])) {

                if ($_GET['respt'] == "sucesso") {
                    ?>

                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>SUCESSO!</strong> Album excluido com sucesso!
                    </div>
                    <?php
                }
            }
            ?>

            <?php
            if (isset($_GET['resp'])) {

                if ($_GET['resp'] == "sucesso") {
                    ?>

                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>SUCESSO!</strong> Mídia cadastrada com sucesso!
                    </div>
                    <?php
                }
            }
            ?>

            <div class="row">
                <div class="col-lg-12">

                    <section class="panel">

                        <header class="panel-heading">
                            <a data-toggle="modal" href="#maisAlbuns"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                                    </span> ALBUNS</button>
                            </a>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="maisAlbuns" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title">CRIANDO ÁLBUM DE FOTOS</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form role="form col-sm-6" method="POST" action="php/salva_nomealbum.php">

                                                <div class="form-group col-sm-6">
                                                    <label for="exampleInputEmail1">SELECIONE A DATA</label>
                                                    <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label for="exampleInputEmail1">Nome do novo álbum</label>
                                                    <input name="nome" type="text" class="form-control" placeholder="nome do álbum">
                                                </div>

                                                <button type="submit" class="btn btn-default">CRIAR</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>




                        </header>

                        <div class="panel-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: left;">NOME DO ÁLBUM</th>
                                            <th style="text-align: center;">Nº FOTOS</th>
                                            <th style="text-align: center;">PUBLICADO</th>
                                            <th style="text-align: center;">EDITAR</th>
                                            <th style="text-align: center;">EXCLUIR</th>
                                            <th style="text-align: center;">POSTADO POR</th>


                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        $seleciona = "SELECT *, album_fotos.nome as albumnome FROM album_fotos
                                                      INNER JOIN usuario ON album_fotos.usuario_id = usuario.usuario_id 
                                                      ORDER BY album_fotos_id DESC";

                                        $seleciona_executa = mysql_query($seleciona)or die(mysql_error());

                                        $cont = 1;
                                        $cont2 = 1;

                                        while ($array_dados = mysql_fetch_array($seleciona_executa)) {
                                            ?>


                                            <tr class="gradeA" style="text-align: center;">
                                                <td style="text-align: left;"><?php echo $array_dados['albumnome']; ?></td>
                                                <td>

                                                    <?php
                                                    $album = $array_dados['album_fotos_id'];
                                                    $sql_seleciona = "SELECT COUNT(*) as qtd FROM fotos WHERE album_fotos_id = $album";
                                                    $executa_sql_seleciona = mysql_query($sql_seleciona)or die(mysql_error());
                                                    $dados_qtd = mysql_fetch_array($executa_sql_seleciona);

                                                    echo $dados_qtd['qtd'];
                                                    ?>


                                                </td>
                                                <td>

                                                    <?php
                                                    if ($array_dados['publicar'] == 1) {
                                                        ?>
                                                        <img src="img/sim.png" alt="">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="img/nao.png" alt="">
                                                        <?php
                                                    }
                                                    ?>

                                                </td>

                                                <td><a href="vfotos_album.php?id=<?php echo $array_dados['album_fotos_id']; ?>"><img src="img/editar.png" alt="" /></a>
                                                </td>

                                                <td><a data-toggle="modal" href="#myModal2<?php echo $cont++; ?>"><img src="img/excluir.png" alt="" /></a>
                                                </td>
                                                <td><?php echo $array_dados['nome']; ?></td>
                                            </tr>


                                        <div class="modal fade" id="myModal2<?php echo $cont2++; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Excluir Album</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Todas as fotos deste album serão excluidas, deseja realmente fazer isso?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                                                        <a href="php/excluir_album.php?id=<?php echo $array_dados['album_fotos_id']; ?>"><button class="btn btn-warning" type="button"> Confirmar</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">


    </section>
</section>
<!--main content end-->

<!--footer start-->
<?php include './footer.php'; ?>
<!--footer end-->


<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/fancybox/source/jquery.fancybox.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>


<script src="js/advanced-form-components.js"></script>
<script src="js/respond.min.js" ></script>


<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page only-->

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#example').dataTable({
            "aaSorting": [[4, "desc"]]
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        //    fancybox
        jQuery(".fancybox").fancybox();
    });

</script>

</body>
</html>
