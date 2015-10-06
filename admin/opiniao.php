<?php
session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}
?>
<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->


<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" /><link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="col-lg-6">
            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE OPINIÃO</strong></div>
                <div class="panel-body">

                    <?php
                    if (isset($_GET['tipo'])) {

                        if ($_GET['tipo'] == "insert") {
                            ?>

                            <form role="form" action="php/salva_opiniao.php" method="POST" enctype='multipart/form-data'>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">SELECIONE A DATA</label>
                                    <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">TÍTULO</label>
                                    <input tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">
                                </div>

                                <div class="form-group">

                                    <label for="exampleInputEmail1">TEXTO</label>
                                    <textarea name="texto" id="" class="ckeditor form-control" rows="7"></textarea>

                                </div>


                                <div class="col-sm-12" style="margin-bottom: 25px;">

                                    <div class="form-group col-sm-8">
                                        <label for="exampleInputEmail1">TEXTO DO DETALHE (não é obrigatório)</label>
                                        <textarea name="texto_detalhe"  tooltip="se você deseja um destaque no texto, digite aqui. máx 100 caracteres" name="" id="" class="wysihtml5 form-control" rows="7" style="border-left: 5px solid #335397;"></textarea>
                                    </div>

                                </div>

                                <div class="divider"></div>
                                <hr/>
                                <div class="divider"></div>

                                <div class="col-sm-12">
                                    <hr/>
                                </div>

                                <div class="row ">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3 col-sm-3">Usar imagens com tam. padrão 800x430px</label>


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
                                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> selecionar imagem</span>
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

                                        <label style="margin-right: 20px;" class="col-sm-3 col-sm-3">PUBLICAR?</label>
                                        <div class="switch switch-square"
                                             data-off-label="<i class='fa fa-times'></i>"
                                             data-on-label="<i class=' fa fa-check'></i>">
                                            <input name="publicar" type="checkbox"  checked />
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

                            $id_opiniao = $_GET['id'];

                            $select_editar = "SELECT * FROM opiniao WHERE opiniao_id = $id_opiniao";
                            $executa_select_editar = mysql_query($select_editar)or die(mysql_error());
                            $linha_editar = mysql_fetch_array($executa_select_editar);
                            ?>

                    <form role="form" action="php/update_opiniao.php" method="POST" enctype='multipart/form-data'>

                        <input type="hidden" value="<?php echo $id_opiniao; ?>" name="id_opiniao"/>
                        
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SELECIONE A DATA</label>
                                    <input value="<?php echo $linha_editar['data']; ?>" name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">TÍTULO</label>
                                    <input value="<?php echo $linha_editar['titulo']; ?>" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" name="titulo" type="text" class="form-control" data-placement="top">
                                </div>

                                <div class="form-group">

                                    <label for="exampleInputEmail1">TEXTO</label>
                                    <textarea name="texto" id="" class="form-control" rows="7"><?php echo $linha_editar['texto']; ?></textarea>

                                </div>


                                <div class="col-sm-12" style="margin-bottom: 25px;">

                                    <div class="form-group col-sm-8">
                                        <label for="exampleInputEmail1">TEXTO DO DETALHE (não é obrigatório)</label>
                                        <textarea name="texto_detalhe"  tooltip="se você deseja um destaque no texto, digite aqui. máx 100 caracteres" name="" id="" class="form-control" rows="7" style="border-left: 5px solid #335397;"><?php echo $linha_editar['texto_detalhe']; ?></textarea>
                                    </div>

                                </div>

                                <div class="divider"></div>
                                <hr/>
                                <div class="divider"></div>

                                <div class="col-sm-12">
                                    <hr/>
                                </div>

                                <div class="row ">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3 col-sm-3">Usar imagens com tam. padrão 800x430px</label>


                                        <div class="form-group last">
                                            <label class="control-label col-md-3"></label>
                                            <div class="col-md-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="imagens/opiniao/<?php echo $linha_editar['foto']; ?>" alt="" />
                                                        <input name="imagem" value="<?php echo $linha_editar['foto']; ?>" type="hidden"/>
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                                        <img src="imagens/biografia/2.jpg" style="max-height: 150px;">
                                                    </div>
                                                    
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
                                    </div>

                                    <div class="col-sm-12">

                                        <hr/>

                                        <label style="margin-right: 20px;" class="col-sm-3 col-sm-3">PUBLICAR?</label>
                                        <div class="switch switch-square"
                                             data-off-label="<i class='fa fa-times'></i>"
                                             data-on-label="<i class=' fa fa-check'></i>">
                                            <input name="publicar" value="1" type="checkbox"  checked />
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
<script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script><script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script><script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script><script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script><script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script><script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script><script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script><script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script><script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script><script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script><script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
<!--this page plugins-->

<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<!--this page  script only-->
<script src="js/advanced-form-components.js"></script>

</body>
</html>
