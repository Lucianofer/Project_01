<?php include('config.php'); ?>
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
		if(isset($_POST['acao']) && $_POST['identificador'] == 'form_home'){

			if($_POST['email'] != ''){
				$email = $_POST['email'];

				if(filter_var($email, FILTER_VALIDATE_EMAIL)){

					$mail = new Email('host','teste@email.com','sua senha...','seu nome...');
					$mail->adicionarEndereco('teste@email.com','seu nome...');
					$corpo = "Email cadastrado na home do site: <hr/>$email";
					$info = array('assunto'=>'Um novo e-mail cadastrado no site!','corpo'=>$corpo);
					$mail->formatarEmail($info);

					if($mail->enviarEmail()){
						echo '<script>alert("Enviado com sucesso!")</script>';
					}else{
						echo '<script>alert("Algo deu errado.")</script>';
					}
				}else{
					echo '<script>alert("Não é um e-mail válido")</script>';
				}
			}else{
				echo '<script>alert("Campos vazios não são permitidos!")</script>';
			}
		}
	?>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch($url) {
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
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

</body>
</html>