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

        <div class="row">
            <button type="submit" formaction="novaQuestao.php?area=<?= $area ?>&idAssunto=<?= $idAssunto ?>&assunto=<?= $assunto ?>" 
                class="btn btn-success">Nova Questão</button>
        </div>

    <br>
    <br>

<?php

$contador=1;

while($questao = $result->fetch()){

        $resposta = array(1 => $questao["RESPOSTA_CERTA"], 2 => $questao["RESPOSTA2"], 3 => $questao["RESPOSTA3"], 
        4 => $questao["RESPOSTA4"], 5 => $questao["RESPOSTA5"]);

    ?>

        <div class="container">
            <form action="processaQuestao.php" method="POST">
                <div class="row">
                    <div class="col-6">
                        <label for="questao">Questão <?= $contador ?>: <?= $questao["PERGUNTA"] ?></label>
                    </div>
                </div>  

                <?php

                    $count = 0;

                    $numeroQuestao = array(1, 2, 3, 4, 5);

                    $questaoOrdenada = array_rand($numeroQuestao, 5);

                    while($count<=4) { 
                        
                        switch ($questaoOrdenada[$count]) {

                            case 1:

                                ?>

                                    <div class="col-8">
                                        <input type="radio" name="resposta" value="1">
                                        <label for="resposta"><?= $resposta[1] ?></label>
                                    </div>

                                <?php

                                break;

                            case 2:

                                ?>

                                    <div class="col-8">
                                        <input type="radio" name="resposta" value="0">
                                        <label for="resposta"><?= $resposta[2] ?></label>
                                    </div>

                                <?php

                                break;

                            case 3:

                                ?>

                                    <div class="col-8">
                                        <input type="radio" name="resposta" value="0">
                                        <label for="resposta"><?= $resposta[3] ?></label>
                                    </div>

                                <?php

                                break;

                            case 4:

                                ?>

                                    <div class="col-8">
                                        <input type="radio" name="resposta" value="0">
                                        <label for="resposta"><?= $resposta[4] ?></label>
                                    </div>

                                <?php

                                break;

                            case 5:

                                ?>

                                    <div class="col-8">
                                        <input type="radio" name="resposta" value="0">
                                        <label for="resposta"><?= $resposta[5] ?></label>
                                    </div>

                                <?php

                                break;

                        }

                        $count++;
                    }

                ?>

                <input type="hidden" name="idAssunto" value="<?= $idAssunto ?>">
                <input type="hidden" name="assunto" value="<?= $assunto ?>">
                <input type="hidden" name="area" value="<?= $area ?>">
                <input type="hidden" name="idQuestao" value="<?= $questao["ID_QUESTAO"] ?>">
                <input type="hidden" name="idUsuario" value="<?= $questao["ID_USUARIO"] ?>">
                
                <div class="row">
                    <button type="submit" class="btn btn-success">Responder</button>
                </div>
            </form>
        </div>

        <br>
        <br>
        <br>

        <p>-------------------------------------------------------------------------------------------------------------------</p>

    <?php

    $contador++;

}

?>

<?php

include('footer.php');

?>