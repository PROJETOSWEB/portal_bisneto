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


if ($destaque == "") {

    $destaque = 2;
}

if ($publicar == "") {

    $publicar = 2;
}


$fileName = $_FILES["img"]["name"];
$pathAndName = "../imagens/noticia/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);


$insert = "INSERT INTO noticia (data_noticia,titulo, texto, texto_detalhe, img, destaque_banner, publicar, usuario_id)VALUES('$data', '$titulo', '$texto', '$texto_detalhe', '$fileName', $destaque, $publicar, $id_usuario)";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../noticias.php?respt=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../noticias.php?respt=erro';
    </script>
    <?php

}
?>