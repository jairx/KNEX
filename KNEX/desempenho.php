<?php

    include('header.php');
    include('brand.php');
    include('dao/queries.php');

?>

<h3 class="pagina">Desempenho</h3>

<br><br>

<p class="pontuacao">Pontuação: <?php $ob = new Queries(); echo $ob->selectPontuacao($_SESSION['id_usuario'])?></p>

<?php

    include('footer.php');

?>