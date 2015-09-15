<div class="page">
    <div class="row">
        <div class="col-md-6">

            <div id="resposta"></div>

            <section class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO de INFORMATIVOS</strong></div>
                <div class="panel-body"  data-ng-controller="signupCtrl">

                    <form name="form_signup" class="form-horizontal form-validation" data-ng-submit="submitForm()" action="#" method="POST">

                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">NOME</label>
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
    </div>

</div>


<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" language="javascript"></script>

<script>
                            $(document).ready(function () {
                                $("#enviar").click(function () {
                                    var nome = $("#nome");
                                    var nomePost = nome.val();
                                    var login = $("#login");
                                    var loginPost = login.val();
                                    var email = $("#email");
                                    var emailPost = email.val();
                                    var senha = $("#senha");
                                    var senhaPost = senha.val();
                                    $.post("php/salva_usuarios.php", {nome: nomePost, login: loginPost, email: emailPost, senha: senhaPost},
                                    function (data) {

                                        $("#resposta").html(data);
                                    }
                                    , "html");
                                });
                            });

</script>