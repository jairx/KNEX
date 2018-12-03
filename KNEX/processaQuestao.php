<?php

    include('header.php');
    include('brand.php');
    include('dao/queries.php');

?>

<?php

$idQuestao = $_GET["idQuestao"];
$idUsuario = $_GET["idUsuario"];
$idAssunto = $_GET["idAssunto"];
$assunto = $_GET["assunto"];
$area = $_GET["area"];
$resposta = $_GET["resposta"];

if($resposta==1){
    
    ?>

        <h2 align=center>Parabéns! Você acertou a questão.</h2>

    <?php

}else{
    ?>

        <h2 align=center>Tente outra vez! Infelizmente a resposta escolhida não é a correta.</h2>

    <?php

}

?>

    <div class="row">
        <button type="submit" formaction="questoes.php?area=<?= $area ?>&idAssunto=<?= $idAssunto ?>&assunto=<?= $assunto ?>" 
            class="btn btn-success">Voltar</button>
    </div>

<?php

    include('footer.php');

?>