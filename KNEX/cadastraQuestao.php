<?php

    include('header.php');
    include('brand.php');
    include('dao/queries.php');

?>

<?php

$pergunta = $_POST["pergunta"];
$resposta1 = $_POST["resposta1"];
$resposta2 = $_POST["resposta2"];
$resposta3 = $_POST["resposta3"];
$resposta4 = $_POST["resposta4"];
$resposta5 = $_POST["resposta5"];
$usuario = $_POST["usuario"];
$idAssunto = $_POST["idAssunto"];
$assunto = $_POST["assunto"];
$area = $_POST["area"];

?>

<?php

    include('footer.php');

?>