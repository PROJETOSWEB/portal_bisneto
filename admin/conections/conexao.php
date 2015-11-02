<?php
error_reporting(0);

//COLOCANDO A VARIAVEL COMO VERDADEIRA - CAI NO PRIMEIRO IF. INFORMACOES DO SERVIDOR LOCAL.
$status = true;

if ($status) {
    $conexao = mysql_connect("localhost", "root", "") or die("Erro na conexao!");
    $db = mysql_select_db("admin", $conexao) or die("Erro ao selecionar banco de dados!");
} else {
    $conexao = mysql_connect('admin-bisneto.mysql.uhserver.com', 'bisneto2015', 'b!sneto2015') or die(mysql_error());
    $db = mysql_select_db('admin_bisneto', $conexao);
}

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>
