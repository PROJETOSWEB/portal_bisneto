<?php
include '../conection/conexao.php';

//PEGANDO DADOS POR POST
$data = $_POST['data'];
$nome = $_POST['nome'];
$link = $_POST['link'];

if (!($data) || !($nome) || !($link)) {
    ?>
    <div class="alert alert-warning fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>AVISO!</strong> Preencha todos os campos.
    </div>

    <?php
    exit();
}


$insert = "INSERT INTO links (nome,link,data_cadastro, usuario_id)VALUES('$nome', '$link','$data', 1)";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>
    <div class="alert alert-success fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>SUCESSO!</strong> Link cadastrado com sucesso!
    </div>

    <?php
} else {
    ?>

    <div class="alert alert-block alert-danger fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>ERRO</strong> Link nao cadastrado.
    </div>

    <?php
}




