<?php
session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$id_usuario = $_SESSION['id'];

include '../conections/conexao.php';

$tipo = $_GET['tipo'];
$album = $_GET['album'];

if ($tipo == 1) {


    $update_publicar = "UPDATE album_fotos SET publicar = $tipo WHERE album_fotos_id = $album";
    $executa_update = mysql_query($update_publicar)or die(mysql_error());


    if ($executa_update) {
        ?>

        <script>
            window.location.href = '../vfotos_album.php?publicar=sucesso&id=<?php echo $album; ?>';
        </script>

        <?php
    } else {
        ?>
        <script>
            window.location.href = '../vfotos_album.php?publicar=erro&id=<?php echo $album; ?>';
        </script>
        <?php
    }
    ?>

    <?php
} else if ($tipo == 2) {
    
    $update_publicar = "UPDATE album_fotos SET publicar = $tipo WHERE album_fotos_id = $album";
    $executa_update = mysql_query($update_publicar)or die(mysql_error());

    if ($executa_update) {
        ?>

        <script>
            window.location.href = '../vfotos_album.php?publicanao=sucesso&id=<?php echo $album; ?>';
        </script>

        <?php
    } else {
        ?>
        <script>
            window.location.href = '../vfotos_album.php?publicanao=erro&id=<?php echo $album; ?>';
        </script>
        <?php
    }
}


