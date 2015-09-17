<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->


<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
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
                        <strong>SUCESSO!</strong> Arquivo cadastrado com sucesso!
                    </div>
                    <?php
                }
            }
            ?>




            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE ARQUIVOS</strong></div>
                <div class="panel-body">

                    <form role="form" action="php/salva_salaimprensa.php" method="POST" enctype='multipart/form-data'>

                        <div class="form-group">
                            <label for="exampleInputEmail1">SELECIONE A DATA</label>
                            <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                        </div>



                        <div class="col-sm-13">
                            <label for="exampleInputEmail1">NOME DO ARQUIVO</label>
                            <input name="nome" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" name="nome" class="form-control" data-placement="top">
                        </div>


                        </br>
                        </br>



                        <div class="form-group">
                            <div class="col-lg-10">
                                <select name="tipo_arquivo" class="form-control m-bot15">
                                    <option>TIPO DE ARQUIVO</option>
                                    <option>•••••••••••••••</option>
                                    <option>PDF</option>
                                    <option>JPG</option>
                                    <option>PNG</option>
                                    <option>TIF</option>
                                    <option>DOC</option>
                                    <option>XLS</option>
                                </select>
                            </div>
                        </div>


                        </br>
                        </br>
                        </br>

                        <div class="col-sm-13">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-white btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Carregar arquivo</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                    <input type="file" name="arquivo" class="default" />
                                </span>
                                <span class="fileupload-preview" style="margin-left:5px;"></span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                            </div>
                        </div>

                        <div class="col-sm-13">
                            <hr/>
                        </div>

                        <input type="submit" class="btn btn-primary" value="SALVAR"></input>

                    </form>

                </div>
            </section>
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
<!--custom switch-->
<script src="js/bootstrap-switch.js"></script>
<!--custom tagsinput-->
<script src="js/jquery.tagsinput.js"></script>
<!--this page plugins-->

<!--this page plugins-->

<script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<!--this page  script only-->
<script src="js/advanced-form-components.js"></script>

</body>
</html>
