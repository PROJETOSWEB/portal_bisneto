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
$nome = $_POST['nome'];
$publicar = $_POST['publicar'];
$img = $_FILES['img'];


$id_banner = $_POST['banner_id'];

if ($publicar == "") {

    $publicar = 2;
    
}

$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
    
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/banner/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
    
}

$update_dados = "UPDATE banner SET data_banner = '$data', nome_banner = '$nome', img = '$nova_imagem',publicar = '$publicar'"
                ."WHERE banner_id = $id_banner";


$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vbanner.php?respte=sucesso';
    </script>

    <?php
} else {
    ?>
    <script>
        window.location.href = '../vbanner.php?respte=erro';
    </script>
    <?php
}
?>

   

