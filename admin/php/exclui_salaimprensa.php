<?php

include '../conections/conexao.php';
$id_salaimprensa = $_GET['id'];


$delete_usuario = "DELETE FROM salaimprensa WHERE salaimprensa_id = $id_salaimprensa";
$executa_delete = mysql_query($delete_usuario)or die(mysql_error());


if ($executa_delete) {
    ?>

    <script>
        window.location.href = '../vsalaimprensa.php?resp=sucesso';
    </script>
    <?php

} else {
    ?>

    <script>
        window.location.href = '../vsalaimprensa.php?resp=erro';
    </script>
    <?php

}

