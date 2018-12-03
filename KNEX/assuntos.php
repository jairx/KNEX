<?php

include('header.php');
include('brand.php');
include('dao/queries.php');

?>

<?php

$idArea = $_GET["idArea"];
$area = $_GET["area"];

$query = new Queries();

$result = $query->selectAssunto($idArea);

?>

    <br>
    <br>
    <br>
    <h2><?= $area ?></h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php

while($assunto = $result->fetch()){

    ?>

        <a href="questoes.php?idAssunto=<?= $assunto["ID_ASSUNTO"] ?>&assunto=<?= $assunto["ASSUNTO"]?>&area=<?= $area ?>">
            <h3 id="assunto"><?= $assunto["ASSUNTO"] ?></h3>
        </a>
        <br>
        <br>

    <?php

}

?>

<?php

include('footer.php');

?>