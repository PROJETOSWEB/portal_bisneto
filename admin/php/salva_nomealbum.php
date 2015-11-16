<?php

session_start();

if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

$id_usuario = $_SESSION['id'];

include '../conections/conexao.php';


//PEGANDO VARIAVEIS POR POST
$nomealbum = $_POST['nome'];
$data = $_POST['data'];


$insert = "INSERT INTO album_fotos (data_album, nome, publicar, usuario_id)VALUES('$data', '$nomealbum', 2, $id_usuario)";
$executa_insert = mysql_query($insert)or die(mysql_error());


$seleciona_ultimo_registro = "SELECT MAX(album_fotos_id) as ultimo FROM album_fotos";
$executa_seleciona_registro = mysql_query($seleciona_ultimo_registro)or die(mysql_error());
$dados_max = mysql_fetch_array($executa_seleciona_registro);
$ultimo = $dados_max['ultimo'];

if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../vfotos_album.php?id=<?php echo $ultimo; ?>';
    </script>
    <?php
}

?>



