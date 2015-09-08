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
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE NOTÍCIA</strong></div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">

                            <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                            <span class="help-block">Select date</span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">TÍTULO DA NOTÍCIA</label>
                            <input tooltip="Título do seu artigo" type="text" class="form-control" data-placement="top">
                        </div>

                        <div class="form-group">

                            <label for="exampleInputEmail1">TEXTO</label>
                            <textarea name="" id="" class="form-control" rows="7"></textarea>

                        </div>


                        <div class="col-sm-12" style="margin-bottom: 25px;">

                            <div class="form-group col-sm-8">
                                <label for="exampleInputEmail1">TEXTO DO DETALHE (não é obrigatório)</label>
                                <textarea  tooltip="se você deseja um destaque no texto, digite aqui. máx 100 caracteres" name="" id="" class="form-control" rows="7" style="border-left: 5px solid #335397;"></textarea>
                            </div>

                        </div>

                        <div class="divider"></div>
                        <hr/>
                        <div class="divider"></div>


                        <div class="row ">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputEmail1">USAR IMAGENS COM TAM. PADRÃO 800x430px</label>


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
                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                    <input type="file" class="default" />
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">

                                <hr/>
                                <label style="margin-right: 20px;" for="exampleInputEmail1">PUBLICAR?</label>
                                <label class="switch switch-success">
                                    <input type="checkbox" checked><i></i>
                                </label>
                                   <hr/>

                            </div>
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
