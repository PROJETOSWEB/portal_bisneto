<?php

include '../conections/conexao.php';
$id_album = $_GET['id'];


//DELETANDO PRIMEIRO AS FOTOS DO ALBUM

$delete_fotos = "DELETE FROM fotos WHERE album_fotos_id = $id_album";
$executa_delete_fotos = mysql_query($delete_fotos)or die(mysql_error());

if ($executa_delete_fotos) {

    $delete_album = "DELETE FROM album_fotos WHERE album_fotos_id = $id_album";
    $executa_delete = mysql_query($delete_album)or die(mysql_error());
        
}

if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../valbuns.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../valbuns.php?respt=erro';
    </script>
    <?php

}

