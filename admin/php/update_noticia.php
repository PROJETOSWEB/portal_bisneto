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
$destaque = $_POST['destaque'];
$publicar = $_POST['publicar'];
$img = $_FILES['img'];

$id_noticia = $_POST['id_noticia'];

if ($destaque == "") {

    $destaque = 2;
}

if ($publicar == "") {

    $publicar = 2;
}



$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/noticia/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
}

$update_dados = "UPDATE noticia SET data_noticia = '$data', titulo = '$titulo', texto = '$texto',"
        . "texto_detalhe = '$texto_detalhe', img = '$nova_imagem', destaque_banner = '$destaque', publicar = '$publicar'"
        . "WHERE noticia_id = $id_noticia";


$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vnoticia.php?respte=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../vnoticia.php?respte=erro';
    </script>
    <?php

}
?>



