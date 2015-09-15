<?php
include '../conection/conexao.php';


//PEGANDO DADOS POR POST
$data = $_POST['data'];
echo $edicao = $_POST['edicao'];
echo $fileName = $_FILES["pdf"]["name"];

echo $img = $_FILES['img'];
echo $pdf = $_FILES['pdf'];

exit;

if (!($data) || !($edicao)) {
    ?>
    <div class="alert alert-warning fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>AVISO!</strong> Preencha todos os campos.
    </div>

    <?php
    exit();
}


$fileName = $_FILES["img"]["name"];

$pathAndName = "../imagens/informativo" . $fileName;
$fileTmpLoc = $_FILES["arquivo"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);



$fileName2 = $_FILES["pdf"]["name"];
$pathAndName2 = "../imagens/informativo_pdf" . $fileName2;
$fileTmpLoc2 = $_FILES["arquivo"]["tmp_name"];
$moveResult2 = move_uploaded_file($fileTmpLoc2, $pathAndName2);



$insert = "INSERT INTO informativo (data_informativo,edicao,img, pdf ,usuario_id)VALUES('$data', '$edicao','$fileName', '$fileName2',1)";
$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>
    <div class="alert alert-success fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>SUCESSO!</strong> Informativo cadastrado com sucesso!
    </div>

    <?php
} else {
    ?>

    <div class="alert alert-block alert-danger fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
        </button>
        <strong>ERRO</strong> Informativo nao cadastrado.
    </div>

    <?php
}




