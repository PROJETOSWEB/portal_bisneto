<?php include 'includes.php'; ?>

<div class="page-signin">

    <div class="signin-header" style="padding-bottom: 0px;">
        <div class="container text-center">
            <section class="logo">
                <img src="<?php echo  base_url(); ?>/template/img/arthur-bisneto.png" width="200" alt="" />
                <img src="<?php echo  base_url(); ?>/template/img/logo-bisneto.png" width="200" alt="" />
            </section>
        </div>
    </div>
    
    <div class="signin-body">
        <div class="container">
            <div class="form-container">

                

                <span class="line-thru"> ENTRE NO ADMINISTRADOR</span>

                <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="email"
                                       class="form-control"
                                       placeholder="Login">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                <input type="password"
                                       class="form-control"
                                       placeholder="senha">
                            </div>
                            <p class="text-right" style="padding-right: 5px;"><a href="javascript:;">esqueceu a senha?</a></p>
                        </div>
                        <div class="form-group">
                            <a href="#/" class="btn btn-primary btn-lg btn-block">acessar</a>
                        </div>
                    </fieldset>
                </form>

				    <section class="logo text-center">
				        <img src="<?php echo  base_url(); ?>/template/img/logo-sky-admin-footer.png" alt="Sistema Adiminstrativo de Sites Online" title="Sistema Adiminstrativo de Sites Online" width="150" alt="" />
				    </section>
				
            </div>
        </div>
    </div>

</div>