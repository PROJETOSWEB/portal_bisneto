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



$fileName = $_FILES["img"]["name"];
$pathAndName = "../imagens/informativo/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);



$fileName1 = $_FILES["arquivo"]["name"];
$pathAndName1 = "../imagens/informativo/arquivo/" . $fileName1;
$fileTmpLoc1 = $_FILES["arquivo"]["tmp_name"];
$moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);



$insert = "INSERT INTO informativo (data_informativo, edicao, img, pdf, usuario_id)VALUES('$data', '$edicao', '$fileName', '$fileName1', $id_usuario)";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../informativo.php?respt=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../informativo.php?respt=erro';
    </script>
    <?php

}
?>
