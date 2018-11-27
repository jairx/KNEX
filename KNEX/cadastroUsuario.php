<?php

    include('header.php');
    include('brand.php');

?>

<div class="container">
  <form action="controller/postUsuario.php" method="post">

    <div class="row">
      <div class="col-6">
        <label for="nome">Nome: </label>
      </div>
      <div class="col-8">
        <input type="text" id="lnome" name="nome" placeholder="Insira seu nome aqui...">
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <label for="lname">CPF: </label>
      </div>
      <div class="col-8">
        <input type="text" id="lcpf" name="cpf" placeholder="Insira seu CPF aqui...">
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <label for="country">Email: </label>
      </div>
      <div class="col-8">
          <input type="text" id="lemail" name="email" placeholder="Insira seu email aqui...">
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <label for="country">Usuário: </label>
      </div>
      <div class="col-8">
          <input type="text" id="lusuario" name="usuario" placeholder="Insira um nome de usuário aqui...">
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <label for="country">Senha: </label>
      </div>
      <div class="col-8">
          <input type="text" id="lsenha" name="senha" placeholder="Insira uma senha aqui...">
      </div>
    </div>
    
    <div class="row">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>

  </form>
</div>

<?php

    include('footer.php');

?>