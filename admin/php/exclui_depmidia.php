<?php

include '../conections/conexao.php';
$id_depmidia = $_GET['id'];


$delete_usuario = "DELETE FROM depmidia WHERE depmidia_id = $id_depmidia";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../vdepmidia.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../vdepmidia.php?respt=erro';
    </script>
    <?php

}

