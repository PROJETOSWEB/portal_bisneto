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
$edicao = $_POST['edicao'];
$img = $_FILES['img'];
$arquivo = $_FILES['arquivo'];
$id_informativo = $_POST['informativo_id'];



$fileName = $_FILES["img"]["name"];

if ($fileName == "") {

    $nova_imagem = $_POST['imagem'];
} else {

    $nova_imagem = $fileName;
    $pathAndName = "../imagens/informativo/" . $fileName;
    $fileTmpLoc = $_FILES["img"]["tmp_name"];
    $moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
}


$fileName1 = $_FILES["arquivo"]["name"];
if ($fileName1 == "") {

    $arquivo_novo = $_POST['arquivo_nome'];
} else {

    $arquivo_novo = $fileName1;
    $pathAndName1 = "../imagens/informativo/arquivo/" . $fileName1;
    $fileTmpLoc1 = $_FILES["arquivo"]["tmp_name"];
    $moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);
}



$update_dados = "UPDATE informativo SET data_informativo = '$data', edicao = '$edicao', img = '$nova_imagem', "
        . "pdf= '$arquivo_novo'"
        . "WHERE informativo_id = $id_informativo";


$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vinformativo.php?respte=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../vinformativo.php?respte=erro';
    </script>
    <?php

}
?>



