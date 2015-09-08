<div class="page">
    <div class="row">
        <div class="col-md-6">

            <div id="resposta"></div>

            <section class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO de LINKS ÚTEIS</strong></div>
                <div class="panel-body">
                    <form role="form" action="#" method="POST">

                        <div class="panel-body" data-ng-controller="DatepickerDemoCtrl" style="margin-bottom: 30px;">
                            <div class="row">
                                <div class="col-sm-7">

                                    <div class="input-group ui-datepicker">
                                        <input type="text"id="data" name="data" 
                                               class="form-control"
                                               datepicker-popup="{{format}}"
                                               ng-model="dt"
                                               is-open="opened"
                                               min="minDate"
                                               max="'2015-06-22'"
                                               datepicker-options="dateOptions" 
                                               ng-required="true" 
                                               close-text="Close">
                                        <span class="input-group-addon" ng-click="open($event)"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>                    	


                        <div class="form-group">
                            <label for="exampleInputEmail1">NOME DO LINK</label>
                            <input name="nome" id="nome" tooltip="Título do seu artigo, EVITE TÍTULOS LONGOS" type="text" class="form-control" data-placement="top">
                        </div>

                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">LINK</label>
                            <input name="link" id="link" tooltip="Colque aqui o link do site de onde a matéria foi tirada" type="text" class="form-control" value="http://">
                        </div>


                        <div class="divider"></div>
                        <hr/>
                        <div class="divider"></div>

                        <input class="btn btn-primary" type="button" value="SALVAR" id="enviar" />


                    </form>      
                </div>
            </section>
        </div>


    </div>



</div>



<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" language="javascript"></script>


<script>
                                            $(document).ready(function () {
                                                $("#enviar").click(function () {
                                                    var data = $("#data");
                                                    var dataPost = data.val();
                                                    var nome = $("#nome");
                                                    var nomePost = nome.val();
                                                    var link = $("#link");
                                                    var linkPost = link.val();
                                                    $.post("php/salva_links.php", {data: dataPost, nome: nomePost, link: linkPost},
                                                    function (data) {

                                                        $("#resposta").html(data);
                                                    }
                                                    , "html");
                                                });
                                            });

</script>