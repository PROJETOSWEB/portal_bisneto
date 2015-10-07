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


$nome = $_POST['nome'];
$link = $_POST['link'];
$id_link = $_POST['id_link'];



 $update_dados = "UPDATE links SET nome = '$nome', link = '$link' WHERE links_id = $id_link";
$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vlinks.php?respte=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../vlinks.php?respte=erro';
    </script>
    <?php
}
?>

   