<?php

include('header.php');
include('brand.php');
include('dao/queries.php');

?>

<?php

$idAssunto = $_GET["idAssunto"];
$assunto = $_GET["assunto"];
$area = $_GET["area"];

$query = new Queries();

$result = $query->selectQuestao($idAssunto);

?>

    <br>
    <br>
    <br>
    <h2><?= $area ?> - <?= $assunto ?></h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<?php

while($questao = $result->fetch()){

        $resposta = array(1 => $questao["RESPOSTA_CERTA"], 2 => $questao["RESPOSTA2"], 3 => $questao["RESPOSTA3"], 
        4 => $questao["RESPOSTA4"], 5 => $questao["RESPOSTA5"]);

    ?>

        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6">
                        <label for="questao">Questão: <?= $questao["QUESTAO"] ?></label>
                    </div>
                </div>  

                <?php

                    $count = 1;

                    while($count<=5) {            

                ?>

                <div class="col-8">
                    <input type="radio" name="resposta" value="1">
                    <label for="resposta"><?= $resposta($count) ?></label>
                </div>

                <?php

                        $count++;
                    }

                ?>
                
                <div class="row">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>

        <br>
        <br>
        <br>

    <?php

}

?>

<?php

include('footer.php');

?>