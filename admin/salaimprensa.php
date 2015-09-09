<!--header end-->
<?php include './header.php'; ?>
<?php include './menu.php'; ?>
<!--sidebar end-->


<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="col-lg-6">
            <section class="panel">

                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE ARQUIVOS</strong></div>
                <div class="panel-body">
                    
                    <form role="form" action="php/salva_salaimprensa.php" method="POST" enctype='multipart/form-data'>

                        <div class="form-group">

                            <input class="form-control form-control-inline input-medium default-date-picker" name="data" size="16" type="text" value="" />
                            <span class="help-block">Select date</span>
                        </div>


                        <div class="col-sm-13">
                            <label for="exampleInputEmail1">NOME DO ARQUIVO</label>
                            <input tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" name="nome" class="form-control" data-placement="top">
                        </div>

                        
                        </br>
                        <div class="col-sm-13">
                            <select name="tipo">
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

                        </br>

                        <div class="col-sm-13">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-white btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Carregar arquivo</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                    <input type="file" name="img" class="default" />
                                </span>
                                <span class="fileupload-preview" style="margin-left:5px;"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
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