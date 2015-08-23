<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
            <?php include 'includes.php'; ?>
            <title>Login | e-celula</title>
    </head>
    <body>

        <div id="div_login">
            <div id="form_login">

                <div id="logo_empresa">
                    <img src="<?php echo base_url(); ?>template/images/logo.png" style="max-height:100px;margin:20px 0px;" />
                </div>

                <div id="barra_login">
                    <div id="textlogin">Login</div>
                </div>
                <div id="corpologin">
                    <?php echo form_open('login/verificarLogin'); ?>


                    <div id="divinput">
                        <div id="inputicon"><i class="fa fa-user"style="margin-top: 9px; margin-left: 4px;"></i></div>
                        <input id="inputlogin" type="text" name="cpf" placeholder="CPF"></input>
                    </div>

                    <div id="divinput">
                        <div id="inputicon"><i class="fa fa-key"style="margin-top: 9px;margin-left: 4px;"></i></div>
                        <input id="inputlogin" type="text" name="senha" placeholder="Senha"></input>
                    </div>

                    <div id="esqueci">Esqueceu a Senha?</div>
                    <input id="logar" type="submit"/>

                    <?php echo form_close(); ?>

                </div>
            </div>
        </div>
    </body>
</html>