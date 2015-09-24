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
                        <strong>SUCESSO!</strong> Informativo cadastrado com sucesso!
                    </div>
                    <?php
                }
            }
            ?>


            <section class="panel">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE INFORMATIVO</strong></div>
                <div class="panel-body">


                    <?php
                    if (isset($_GET['tipo'])) {

                        if ($_GET['tipo'] == "insert") {
                            ?>
                            <form role="form" method="post" action="php/salva_informativo.php" enctype='multipart/form-data'>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">SELECIONE A DATA</label>
                                    <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                </div>


                                <div class="col-sm-13">
                                    <label for="exampleInputEmail1">Nº da EDIÇÃO</label>
                                    <input name="edicao" id="edicao" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                                </div>

                                <br/>
                                <hr/>

                                <div class="row ">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3 col-sm-3">Usar imagens com tam. padrão 500x700px</label>


                                        <div class="form-group last">
                                            <label class="control-label col-md-3"></label>
                                            <div class="col-md-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class="btn btn-white btn-file">
                                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> SELECIONE A CAPA JPG</span>
                                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> trocar</span>
                                                            <input type="file" name="img" class="default" />
                                                        </span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">

                                        <hr/>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Carregar arquivo • PDF</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Trocar</span>
                                                <input type="file" name="arquivo" class="default" />
                                            </span>
                                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> excluir</a>
                                        </div>
                                        <hr/>

                                    </div>

                                </div>

                                <input type="submit" class="btn btn-primary" value="SALVAR"></input>

                            </form>


                            <?php
                        }
                    }
                    ?>


                    <?php
                    if (isset($_GET['tipo'])) {

                        if ($_GET['tipo'] == "edit") {


                            $id_informativo = $_GET['id'];

                            $select_editar = "SELECT * FROM informativo WHERE informativo_id = $id_informativo";
                            $executa_select_editar = mysql_query($select_editar)or die(mysql_error());
                            $linha_editar = mysql_fetch_array($executa_select_editar);
                            ?>

                            <form role = "form" method = "post" action = "php/update_informativo.php" enctype = 'multipart/form-data'>

                                <div class = "form-group">
                                    <label for = "exampleInputEmail1">SELECIONE A DATA</label>
                                    <input value="<?php echo $linha_editar['data_informativo']; ?>" name = "data" class = "form-control form-control-inline input-medium default-date-picker" size = "16" type = "text" value = "" />
                                </div>


                                <div class = "col-sm-13">
                                    <label for = "exampleInputEmail1">Nº da EDIÇÃO</label>
                                    <input value="<?php echo $linha_editar['edicao']; ?>" name = "edicao" id = "edicao" tooltip = "Título do seu artigo, EVITE TÍTULOS LONGOS" type = "text" class = "form-control" data-placement = "top">
                                </div>

                                <br/>
                                <hr/>

                                <div class = "row ">
                                    <div class = "form-group col-sm-12">
                                        <label class = "col-sm-3 col-sm-3">Usar imagens com tam. padrão 500x700px</label>


                                        <div class = "form-group last">
                                            <label class = "control-label col-md-3"></label>
                                            <div class = "col-md-9">
                                                <div class = "fileupload fileupload-new" data-provides = "fileupload">
                                                    <div class = "fileupload-new thumbnail" style = "width: 200px; height: 150px;">
                                                        <img src = "imagens/informativo/<?php echo $linha_editar['img']; ?>" alt = "" />
                                                    </div>
                                                    <div class = "fileupload-preview fileupload-exists thumbnail" style = "max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <span class = "btn btn-white btn-file">
                                                            <span class = "fileupload-new"><i class = "fa fa-paper-clip"></i> SELECIONE A CAPA JPG</span>
                                                            <span class = "fileupload-exists"><i class = "fa fa-undo"></i> trocar</span>
                                                            <input type = "file" name = "img" class = "default" />
                                                        </span>
                                                        <a href = "#" class = "btn btn-danger fileupload-exists" data-dismiss = "fileupload"><i class = "fa fa-trash"></i> excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class = "col-sm-12">

                                        <hr/>
                                        <div class = "fileupload fileupload-new" data-provides = "fileupload">
                                            <span class = "btn btn-white btn-file">
                                                <span class = "fileupload-new"><i class = "fa fa-paper-clip"></i> Carregar arquivo • PDF</span>
                                                <span class = "fileupload-exists"><i class = "fa fa-undo"></i> Trocar</span>
                                                <input type = "file" name = "arquivo" class = "default" />
                                                <input type = "hidden" name = "arquivo_nome" value="<?php echo $linha_editar['pdf'] ?>" class = "default" />
                                                <input type = "hidden" name = "informativo_id" value="<?php echo $id_informativo; ?>" class = "default" />
                                            </span>
                                            <span class = "fileupload-preview" style = "margin-left:5px;"><?php echo $linha_editar['pdf']; ?></span>
                                            <a href = "#" class = "btn btn-danger fileupload-exists" data-dismiss = "fileupload"><i class = "fa fa-trash"></i> excluir</a>
                                        </div>
                                        <hr/>

                                    </div>

                                </div>

                                <input type = "submit" class = "btn btn-primary" value = "SALVAR"></input>

                            </form>

        <?php
    }
}
?>

                </div>
            </section>
        </div>

    </section>
</section>
<!--main content end-->

<!--footer start-->
<?php include './footer.php';
?>
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
