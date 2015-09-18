<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->
<link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<!--main content start-->
<section id="main-content">
    <section class="wrapper">


        <div class="col-lg-6">

            <?php
            if (isset($_GET['respt'])) {

                if ($_GET['respt'] == "sucesso") {
                    ?>

                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>SUCESSO!</strong> Biografia cadastrada com sucesso!
                    </div>
                    <?php
                }
            }
            ?>


            <?php
            if (isset($_GET['updt'])) {

                if ($_GET['updt'] == "sucesso") {
                    ?>

                    <div class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>SUCESSO!</strong> Biografia atualizada com sucesso!
                    </div>
                    <?php
                }
            }
            ?>



            <?php
            //VERIFICA SE TEM BIOGRAFIA CADASTRADA

            $sql_seleciona_biografia = "SELECT COUNT(*) as qtd, texto, foto FROM biografia";
            $executa_seleciona_biografia = mysql_query($sql_seleciona_biografia)or die(mysql_error());
            $dadosb = mysql_fetch_array($executa_seleciona_biografia);

            if ($dadosb['qtd'] >= 1) {
                ?>

                <section class="panel">
                    <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> ATUALIZAÇÃO DA BIOGRAFIA</strong></div>
                    <div class="panel-body">


                        <form role="form" action="php/edita_biografia.php" method="POST" enctype='multipart/form-data'>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Texto</label>
                                <textarea name="texto" id="" class="wysihtml5 form-control" rows="7"><?php echo $dadosb['texto'] ?></textarea>
                            </div>

                            <div class="col-sm-12">
                                <hr/>
                            </div>

                            <div class="row ">
                                <div class="form-group">
                                    <label class="col-sm-3 col-sm-3">Usar imagens com tam. padrão 800x430px</label>
                                </div>


                                <div class="form-group last">

                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="imagens/biografia/<?php echo $dadosb['foto']; ?>" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                    <input type="file" <?php echo $dadosb['foto']; ?> name="img" class="default" />
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <hr/>
                                </div>

                            </div>


                            <input type="submit" class="btn btn-primary" value="ATUALIZAR"></input>

                        </form>

                    </div>
                </section>


                <?php
            } else {
                ?>
                <section class="panel">
                    <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span>ATUALIZAÇÃO DA  BIOGRAFIA</strong></div>
                    <div class="panel-body">


                        <form role="form" action="php/salva_biografia.php" method="POST" enctype='multipart/form-data'>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Texto</label>
                                <textarea name="texto" id="" class="form-control" rows="7"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">USAR IMAGENS COM TAM. PADRÃO 800x430px</label>
                            </div>



                            <input type="submit" class="btn btn-primary" value="SALVAR"></input>

                        </form>

                    </div>
                </section>


                <?php
            }
            ?>




        </div>

    </section>
</section>
<!--main content end-->

<!--footer start-->
<?php include './footer.php'; ?>
<!--footer end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/respond.min.js" ></script>

<!--this page plugins-->

<script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<!--this page  script only-->
<script src="js/advanced-form-components.js"></script>

<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

<script>

    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
