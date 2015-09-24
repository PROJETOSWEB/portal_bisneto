<?php

session_start();
if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$id_usuario = $_SESSION['id'];


include '../conections/conexao.php';

///PEGANDO DADOS POR POST
$data = $_POST['data'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo_arquivo'];
$arquivo = $_FILES['arquivo'];
$salaimprensa_id = $_POST['salaimprensa_id'];


$fileName1 = $_FILES["arquivo"]["name"];
$pathAndName1 = "../imagens/salaimprensa/arquivo/" . $fileName1;
$fileTmpLoc1 = $_FILES["arquivo"]["tmp_name"];
$moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);


if ($fileName1 == "") {

    $novo_arquivo = $_POST['arquivo_nome'];
} else {

    $novo_arquivo = $fileName;

    $pathAndName1 = "../imagens/salaimprensa/arquivo/" . $fileName1;
    $fileTmpLoc1 = $_FILES["arquivo"]["tmp_name"];
    $moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);
}

$update_dados = "UPDATE salaimprensa SET data = '$data', nome = '$nome',tipo_arquivo = '$tipo'"
        . "WHERE salaimprensa_id = $salaimprensa_id";

$executa_update_dados = mysql_query($update_dados)or die(mysql_error());


if ($executa_update_dados) {
    ?>

    <script>
        window.location.href = '../vsalaimprensa.php?respte=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../vsalaimprensa.php?respte=erro';
    </script>
    <?php

}
?>

