<div class="page">
    <div class="row">
        <div class="col-md-6">
            <section class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> CADASTRO de INFORMATIVOS</strong></div>
                <div class="panel-body"  data-ng-controller="signupCtrl">
                    <form name="form_signup" class="form-horizontal form-validation" data-ng-submit="submitForm()">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">NOME</label>
                            </div>
                            <div class="col-sm-9">
                                <input  type="text"
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
                        <button type="submit"
                                class="btn btn-default btn-block btn-lg"
                                data-ng-disabled="!canSubmit()">cadastrar</button>
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