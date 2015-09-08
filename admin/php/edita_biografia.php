<?php
include '../conections/conexao.php';

//PEGANDO DADOS POR POST
$texto = $_POST['texto'];

$foto = $_FILES['img'];

$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $update = "UPDATE biografia SET texto = '$texto', usuario_id = 1";
    $executa_update = mysql_query($update)or die(mysql_error());
} else {

    $pathAndName = "../imagens/biografia/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);

    $update = "UPDATE biografia SET texto = '$texto', foto = '$fileName', usuario_id = 1";
    $executa_update = mysql_query($update)or die(mysql_error());
}


if ($executa_update) {
    ?>

    <script>
        window.location.href = '../biografia.php?updt=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../biografia.php?updt=erro';
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