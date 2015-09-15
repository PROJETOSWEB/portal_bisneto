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
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO </strong></div>
                <div class="panel-body">

                    <form name="form_signup" class="form-horizontal form-validation" data-ng-submit="submitForm()" action="#" method="POST">

                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">NOME </label>
                            </div>
                            <div class="col-sm-9">
                                <input  type="text"
                                        name="nome"
                                        id="nome"
                                        class="form-control"
                                        placeholder="seu nome"
                                        data-ng-model="user.name"
                                        required
                                        data-ng-minlength="2"
                                        data-ng-maxlength="200">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">LOGIN</label>
                            </div>
                            <div class="col-sm-9">
                                <input  type="text"
                                        name="login"
                                        id="login"
                                        class="form-control"
                                        placeholder="minimo de 4, máximo de 30 caracteres"
                                        data-ng-model="user.log"
                                        required
                                        data-ng-minlength="4"
                                        data-ng-maxlength="30">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">EMAIL</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="form-control"
                                       data-ng-model="user.email"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">SENHA</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="password"
                                       name="senha"
                                       id="senha"
                                       class="form-control"
                                       placeholder="minimo de 6 digitos"
                                       data-ng-model="user.password"
                                       required
                                       data-ng-minlength="6">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">CONFIRME A SENHA</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="password"
                                       class="form-control"
                                       data-ng-model="user.confirmPassword"
                                       required
                                       data-validate-equals="user.password">
                            </div>
                        </div> 



                        <input  class="btn btn-default btn-block btn-lg"
                                data-ng-disabled="!canSubmit()" type="button" value="cadastrar" id="enviar" />


                        <div class="callout callout-info">
                            <p>O botão estará ativo quando todos os campos estiverem preenchidos corretamente.</p>
                        </div>

                        <div class="divider"></div>
                        <div class="alert alert-info" data-ng-show="showInfoOnSubmit">cadastro efetuado com sucesso!</div>                 

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
