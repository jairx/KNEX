<?php

    include('header.php');
    include('brand.php');
    include('dao/queries.php');

?>

<?php

    $area = $_GET["area"];
    $idAssunto = $_GET["idAssunto"];
    $assunto = $_GET["assunto"];

?>

    <br>
    <br>
    <br>
        <h2><?= $area ?> - <?= $assunto ?></h2>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <form action="cadastraQuestao.php?" method="POST">

            <div class="col-8">
                <label>Pergunta: </label>
                <input type="textarea" name="pergunta">
            </div>

            <div class="col-8">
                <label>Resposta correta: </label>
                <input type="textarea" name="resposta1">
            </div>

            <div class="col-8">
                <label>Reposta errada 1: </label>
                <input type="textarea" name="resposta2">
            </div>

            <div class="col-8">
                <label>Resposta errada 2: </label>
                <input type="textarea" name="resposta3">
            </div>

            <div class="col-8">
                <label>Resposta errada 3: </label>
                <input type="textarea" name="resposta4">
            </div>

            <div class="col-8">
                <label>Resposta errada 4: </label>
                <input type="textarea" name="resposta5">
            </div>

            <input type="hidden" name="usuario" value="">
            <input type="hidden" name="idAssunto" value="<?= $idAssunto ?>">
            <input type="hidden" name="area" value="<?= $area ?>">
            <input type="hidden" name="assunto" value="<?= $assunto ?>">

            <div>
                <button type="submit" class="btn btn-success">Cadastrar Questão</button>
            </div>

        </form> 
    </div>

<?php

    if(isset($_GET["success"])){

        ?>

            <h2 align=center>Questão cadastrada com sucesso!</h2>

        <?php

    }

?>

<?php

    include('footer.php');

?>