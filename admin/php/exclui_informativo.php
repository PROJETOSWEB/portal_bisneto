<?php

include '../conections/conexao.php';
$id_informativo = $_GET['id'];


$delete_usuario = "DELETE FROM informativo WHERE informativo_id = $id_informativo";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../vinformativo.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../vinformativo.php?respt=erro';
    </script>
    <?php

}

