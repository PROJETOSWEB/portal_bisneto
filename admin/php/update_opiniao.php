<?php
session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$id_usuario = $_SESSION['id'];


include '../conections/conexao.php';

//PEGANDO DADOS POR POST
$data = $_POST['data'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$texto_detalhe = $_POST['texto_detalhe'];
$img = $_FILES['img'];
$publicar = $_POST['publicar'];
$id_opiniao = $_POST['id_opiniao'];

if ($publicar == "") {

    $publicar = 2;
}



$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/opiniao/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
    
}


$update_dados = "UPDATE opiniao SET data = '$data', titulo = '$titulo',texto = '$texto',"
                     ."texto_detalhe = '$texto_detalhe', foto = '$nova_imagem', publicar = '$publicar'"
                     ."WHERE opiniao_id = $id_opiniao";

$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vopniao.php?respte=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../vopniao.php?respte=erro';
    </script>
    <?php
}
?>

   