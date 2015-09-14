<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->

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
                                <textarea name="texto" id="" class="form-control" rows="7"><?php echo $dadosb['texto'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">USAR IMAGENS COM TAM. PADRÃO 800x430px</label>
                            </div>

                            <div class="row ">
                                <div class="form-group">

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

                            <div class="row ">
                                <div class="form-group">

                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                    <input type="file" name="img" class="default" />
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
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>

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
