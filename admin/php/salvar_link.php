<?php
include '../conections/conexao.php';

//PEGANDO DADOS POR POST
$data = $_POST['data'];
$nome = $_POST['nome'];
$link = $_POST['link'];


$insert = "INSERT INTO links (nome,link,data_cadastro, usuario_id)VALUES('$nome', '$link','$data', 1)";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../links.php?respt=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../links.php?respt=erro';
    </script>
    <?php
}
?>
<!--<div class="alert alert-success fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
    </button>
    <strong>SUCESSO!</strong> Link cadastrado com sucesso!
</div>

<div class="alert alert-block alert-danger fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
    </button>
    <strong>ERRO</strong> Link nao cadastrado.
</div>-->

<!--<div class="alert alert-block alert-danger fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="fa fa-times"></i>
    </button>
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div>-->