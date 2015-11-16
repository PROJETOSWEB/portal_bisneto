<?php

include '../conections/conexao.php';
$id_fotos = $_GET['id'];


$delete_usuario = "DELETE FROM fotos WHERE fotos_id = $id_fotos";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../vfotos_album.php?respt=sucesso&id=<?php echo $_GET['album']; ?>';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../vfotos_album.php?respt=erro&id=<?php echo $_GET['album']; ?>';
    </script>
    <?php

}

