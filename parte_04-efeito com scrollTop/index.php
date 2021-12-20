<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon/css" href="<?php echo INCLUDE_PATH; ?>favicon.ico">
	<title>Projeto 01</title>
</head>
<body>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url){
			case 'depoimentos':
				echo '<Target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<Target target="servicos" />';
				break;
		}
	?>

	<header>
		<div class="center">
			
			<div class="logo left"> <a href="">LogoMarca</a> </div> <!-- Logo -->

			<nav class="desktop right">
				
				<ul>
					<li> <a href="<?php echo INCLUDE_PATH; ?>">Home</a> </li>
					<li> <a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a> </li>
					<li> <a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a> </li>
					<li> <a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a> </li>
				</ul>

			</nav> <!-- Desktop -->

			<nav class="mobile right">
				<div class="botao-menu-mobile"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
				
				<ul>
					<li> <a href="<?php echo INCLUDE_PATH; ?>">Home</a> </li>
					<li> <a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a> </li>
					<li> <a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a> </li>
					<li> <a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a> </li>
				</ul>

			</nav> <!-- Mobile -->

			<div class="clear"></div> <!-- Clear -->

		</div> <!-- Center -->
	</header> <!-- Header -->

	<?php


		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			if($url != 'depoimentos' && $url != 'servicos'){
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>	

	<footer>
		<div class="center">
			<p> Todos os direitos reservados </p>
		</div> <!-- Center -->
	</footer>

<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

</body>
</html>