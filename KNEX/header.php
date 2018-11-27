<!DOCTYPE HTML>
<html>
	<head lang="pt-BR">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Só Alegria Festas</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">		
		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	</head>
	<body>

        <?php

            if(!isset($_SESSION)){
            
            ?>
                <div class="login">
                    <p><a class="logar" href="login.php">Logar</a></p>
                </div>
            <?php

            }else{

            ?>
                <div class="login">
                    <p><a class="logar" href="logout.php">Logout</a></p>
                </div>
            <?php

            }

        ?>

		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
                    <div class="menu">
                        <ul class="menu clearfix">
                            <li><a class="nav-item nav-link" href="index.php">Início</a></li>
                            <li><a class="nav-item nav-link" href="index.php">Usuários</a>
                                <ul class="submenu">
                                    <li><a class="nav-item nav-link" href="cadastroUsuario.php">Cadastrar</a></li>
                                    <li><a class="nav-item nav-link" href="desempenho.php">Desempenho</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-item nav-link" href="index.php">Questões</a>
                                <ul class="submenu">
                                    <li><a class="nav-item nav-link" href="novaQuestao.php">Nova questão</a></li>
                                    <li><a class="nav-item nav-link" href="pesquisarQuestoes.php">Pesquisar questões</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-item nav-link" href="index.php">Denúncia</a>
                                <ul class="submenu">
                                    <li><a class="nav-item nav-link" href="novaDenuncia.php">Nova denúncia</a></li>
                                    <li><a class="nav-item nav-link" href="minhasDenuncias.php">Minhas denúncias</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
				</div>
			</div>
		</nav>