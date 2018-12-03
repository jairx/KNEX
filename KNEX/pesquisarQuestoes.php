<?php

    include('header.php');
    include('brand.php');
    include('dao/queries.php');

?>

<?php

    $query = new Queries();

    $result = $query->selectArea();

    while($area = $result->fetch()){

        ?>

            <a href="assuntos.php?idArea=<?= $area["ID_AREA"] ?>&area=<?= $area["AREA"]?>">
                <h3 id="area"><?= $area["AREA"] ?></h3>
            </a>
            <br>
            <br>

        <?php

    }
    
?>

<?php

    include('footer.php');

?>