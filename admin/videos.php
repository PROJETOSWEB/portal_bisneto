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
                        <strong>SUCESSO!</strong> Vídeo cadastrado com sucesso!
                    </div>
                    <?php
                }
            }
            ?>

            <section class="panel">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE VÍDEOS</strong></div>
                <div class="panel-body">



                    <form role="form" action="php/salva_videos.php" method="POST">

                        <div class="form-group">
                        	<label for="exampleInputEmail1">SELECIONE A DATA</label>
                            <input name="data" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">LEGENDA DA VÍDEO</label>
                            <input name="legenda" id="nome" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                        </div>




                        <div class="col-sm-9">
                            <label for="exampleInputEmail1">CÓDIGO DO VÍDEO NO YOUTUBE</label>
                            <div class="input-group">
                                <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                                <input name="codigo" tooltip="Poste o vídeo no youtube, copie o código de 11 dígitos gerado no link do vídeo após o sinal de igual (=), conforme o modelo abaixo" type="text" name="codigo" class="form-control" placeholder="1xq0gD-DIoc">
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <hr/>	
                        



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
