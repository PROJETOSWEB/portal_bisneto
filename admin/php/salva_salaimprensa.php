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
$tipo = $_POST['tipo_arquivo'];
$arquivo = $_FILES['arquivo'];


$fileName1 = $_FILES["arquivo"]["name"];
$pathAndName1 = "../imagens/salaimprensa/arquivo/" . $fileName1;
$fileTmpLoc1 = $_FILES["arquivo"]["tmp_name"];
$moveResult1 = move_uploaded_file($fileTmpLoc1, $pathAndName1);


$insert = "INSERT INTO salaimprensa (data, nome, tipo_arquivo, arquivo, usuario_id)VALUES('$data', '$nome', '$tipo', '$fileName1', $id_usuario)";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>

    <script>
        window.location.href = '../vsalaimprensa.php?respt=sucesso';
    </script>

    <?php

} else {
    ?>
    <script>
        window.location.href = '../vsalaimprensa.php?respt=erro';
    </script>
    <?php

}
?>
