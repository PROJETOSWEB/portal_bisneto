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
$link = $_POST['link'];
$codigo = $_POST['codigo'];

$id_depmidia = $_POST['depmidia_id'];

if ($publicar == "") {

    $publicar = 2;
    
}

$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
    
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/depmidia/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
    
}

$update_dados = "UPDATE depmidia SET data = '$data', titulo = '$titulo', link = '$link', "
               ."codigo = '$codigo', foto = '$nova_imagem' WHERE depmidia_id = $id_depmidia";


$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vdepmidia.php?respte=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../vdepmidia.php?respte=erro';
    </script>
    <?php
}
?>

   