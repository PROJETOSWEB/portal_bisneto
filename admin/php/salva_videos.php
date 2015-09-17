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


$insert = "INSERT INTO videos (data_video, legenda, video, usuario_id)VALUES('$data', '$legenda', '$codigo', $id_usuario)";
$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../videos.php?respt=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../videos.php?respt=erro';
    </script>
    <?php
}
?>
