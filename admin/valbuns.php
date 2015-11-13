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
                        <strong>SUCESSO!</strong> Mídia excluida com sucesso!
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
                        </header>

                        <div class="panel-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="example">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                                        $seleciona = "SELECT * FROM depmidia INNER JOIN
                                                      usuario ON usuario.usuario_id = depmidia.usuario_id order by depmidia_id desc";

                                        $seleciona_executa = mysql_query($seleciona)or die(mysql_error());

                                        $cont = 1;
                                        $cont2 = 1;
                                        
                                        while ($array_dados = mysql_fetch_array($seleciona_executa)) {
                                            ?>


                                            <tr class="gradeA" style="text-align: center;">
                                                <td style="text-align: left;">EVENTO XXXX</td>
                                                <td>34</td>
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
                                                
                                                <td><a href="depmidia.php?tipo=edit&id=<?php echo $array_dados['depmidia_id']; ?>"><img src="img/editar.png" alt="" /></a>
                                                <td><a data-toggle="modal" href="#myModal2<?php echo $cont++; ?>"><img src="img/excluir.png" alt="" /></a>
                                            </tr>


                                        <div class="modal fade" id="myModal2<?php echo $cont2++; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Excluir Clipping</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Deseja realmente excluir este Clipping?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                                                        <a href="php/exclui_depmidia.php?id=<?php echo $array_dados['depmidia_id']; ?>"><button class="btn btn-warning" type="button"> Confirmar</button></a>
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