<?php
include '../conection/conexao.php';

//PEGANDO DADOS POR POST
$nome = $_POST['nome'];
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!($nome) || !($login) || !($email) || !($senha)) {
    ?>
    <div class="alert alert-warning fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>AVISO!</strong> Preencha todos os campos.
    </div>

    <?php
    exit();
}

$insert = "INSERT INTO usuario (nome,login,senha, status, email, nivel)VALUES('$nome', '$login','$senha', 1, '$email',1)";
$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>
    <div class="alert alert-success fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>SUCESSO!</strong> Usuario cadastrado com sucesso!
    </div>

    <?php
} else {
    ?>

    <div class="alert alert-block alert-danger fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>ERRO</strong> Usuario nao cadastrado.
    </div>

    <?php
}




