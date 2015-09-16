<?php

include '../conections/conexao.php';
$id_opiniao = $_GET['id'];


$delete_usuario = "DELETE FROM opiniao WHERE opiniao_id = $id_opiniao";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../vopniao.php?respt=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../vopiniao.php?respt=erro';
    </script>
    <?php

}

