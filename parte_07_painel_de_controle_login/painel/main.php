<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ;?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel de Controle</title>
</head>
<body>

	<aside>
		<div class="menu-wraper">
			<div class="box-usuario">
				
				<div class="avatar-usuario">
					<i class="fa fa-user"></i>
				</div> <!-- Avatar usuario -->

				<!-- <div class="imagem-usuario">
					<img src="uploads/foto.jpg" />
				</div> --> <!-- Imagem usuario -->

				<div class="nome-usuario">
					<p> Luciano E. Fernandes </p>
					<p> Administrador </p>
				</div> <!-- Nome usuário -->

			</div> <!-- Box usuario -->

			<div class="items-menu">
				
				<h2>Cadastro</h2>
				<a href="cadastrar-depoimento">Cadastrar Depoimento</a>
				<a href="cadastrar-servico">Cadastrar Serviço</a>
				<a href="cadastrar-slide">Cadastrar Slides</a>

				<h2>Gestão</h2>
				<a href="listar-depoimentos">Listar Depoimentos</a>
				<a href="listar-servicos">Listar Serviços</a>
				<a href="listar-slides">Listar Slides</a>

				<h2>Administração do Painel</h2>
				<a href="editar-usuarios">Editar Usuários</a>
				<a href="adicionar-usuarios">Adicionar Usuários</a>

				<h2>Configuração Geral</h2>
				<a href="editar-site">Editar Site</a>
			</div> <!-- Items menu -->

		</div> <!-- Menu wraper -->
	</aside>

	<header>
		<div class="center">
			
			<div class="menu-btn">
				<i class="fa fa-bars"></i>
			</div> <!-- Menu btn -->

			<div class="loggout">
				<a href=""> <i class="fa fa-home"></i> <span> Página Inicial </span> </a>
				<a href=""> <i class="fa fa-window-close"></i> <span> Sair </span> </a>
			</div> <!-- Loggout -->

		</div> <!-- Center -->

	</header>

	<div class="content">
		
	</div> <!-- Content -->

	<div class="clear"></div> <!-- Clear -->

</body>
</html>