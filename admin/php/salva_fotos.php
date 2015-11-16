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
$legenda = $_POST['legenda'];
$img = $_FILES['img'];
$album = $_GET['album'];

$fileName = $_FILES["img"]["name"];
$pathAndName = "../imagens/fotos/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);


$insert = "INSERT INTO fotos (data_foto, legenda, foto, album_fotos_id, usuario_id)VALUES('$data', '$legenda', '$fileName', $album, $id_usuario)";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../vfotos_album.php?resp=sucesso&id=<?php echo $album; ?>';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../vfotos_album.php?resp=erro&id=<?php echo $album; ?>';
    </script>
    <?php
}
?>
