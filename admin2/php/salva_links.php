<?php
include '../conection/conexao.php';

//PEGANDO DADOS POR POST
$data = $_POST['data'];
$nome = $_POST['nome'];
$link = $_POST['link'];

$insert = "INSERT INTO links (nome,link,data_cadastro)VALUES('$nome', '$link','$data')";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>
    <script>
        windows.href = '../views/admin/#/links_adc';
    </script>

    <?php
}
?>

