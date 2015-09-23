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
$codigo = $_POST['codigo'];


$id_videos = $_POST['videos_id'];



$update_dados = "UPDATE videos SET data_video = '$data', legenda = '$legenda', video = '$codigo'"
                ."WHERE videos_id = $id_videos";


$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vvideos.php?respte=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../vvideos.php?respte=erro';
    </script>
    <?php
}
?>

   

