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

            <h1 style="font-weight: 300;">
            <span class="fa fa-bullhorn"></span>  SALA DE IMPRENSA</h1>
                                    <hr style="border: 1px solid #333;">
                                    <div class="divider"></div>
                                    <div class="divider"></div>
                        
                                    </br>
                                    </br>    
            
            
                        <div class="row">
                            <div class="col-lg-12">
            
                                <section class="panel">
            
                                    <header class="panel-heading">
                                        <a href="salaimprensa.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus">
                                                </span> ARQUIVOS</button>
                                        </a>
                                    </header>

                        <div class="panel-body">
                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="example">
 									<thead>
                                        <tr>
                                            <th style="text-align: left;">NOME DO ARQUIVO</th>
                                            <th style="text-align: center;">TIPO</th>
                                            <th style="text-align: center;">POSTADO POR</th>
                                            <th style="text-align: center;">EDITAR</th>
                                            <th style="text-align: center;">EXCLUIR</th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr class="gradeA" style="text-align: center;">
                                            <td style="text-align: left;">ESTATUTO 002</td>
                                            <td>PDF</td>
                                            <td>Fulano</td>
                                            <td><a href="#"><img src="img/editar.png" alt="" /></a></td>
                                            <td><a href="#"><img src="img/excluir.png" alt="" /></a></td>
                                        </tr>
                                        


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
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/respond.min.js" ></script>


<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page only-->

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#example').dataTable({
            "aaSorting": [[4, "desc"]]
        });
    });
</script>

</body>
</html>
