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
            <section class="panel">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO DE NOTÍCIA</strong></div>
                <div class="panel-body">
                    <form role="form">
                    
                        <div class="form-group">
                        	<label for="exampleInputEmail1">SELECIONE A DATA</label>
                            <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
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
                            	
                            	<label style="margin-right: 20px;" for="exampleInputEmail1">DESTAQUE • BANNER</label>
                                <div class="switch switch-square"
                                 data-on-label="<i class=' fa fa-check'></i>"
                                	data-off-label="<i class='fa fa-times'></i>">
                                    <input type="checkbox" />
                                </div>

                                <hr/>
                                
                                <label style="margin-right: 20px;" for="exampleInputEmail1">PUBLICAR?</label>
                               <div class="switch switch-square"
                               	  data-off-label="<i class='fa fa-times'></i>"
                                    data-on-label="<i class=' fa fa-check'></i>">
                                   <input type="checkbox"  checked />
                               </div>
                                
                                
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
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
  
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
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
